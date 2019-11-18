<?php

namespace App\Http\Controllers;
use App\Brands;
use App\Products;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Session;
class ProductsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
    }
    public function products($id=NULL){
        $products=Products::all();
        $category=Category::all();
        $subcat=SubCategory::all();
        $brand=Brands::all();
        $edit='';
        if(isset($id)){
            $edit=Products::find($id);
        }
        return view ('admin.products',compact('products','edit','category','subcat','brand'));
    }
    public function store_products(Request $request)
    {
        if($request->file('photo')){
        $md5Name = md5_file($request->file('photo')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('photo')->guessExtension();
    $data['photo'] = $request->file('photo')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('photo')->move('uploads', $data['photo']);}
        $data['id']=$request->id;
        $data['sub_categoryID']=$request->sub_categoryID;
        $data['categoryID']=$request->categoryID;
        $data['name_ch']=$request->name_ch;
        $data['name_en']=$request->name_en;
        $data['description_ch']=$request->description_ch;
        $data['description_en']=$request->description_en;
        $data['brandID']=$request->brandID;
        $data['status']=$request->status;
        $data['mrp_ch']=$request->mrp_ch;
        $data['mrp_en']=$request->mrp_en;
        $data['unit_ch']=$request->unit_ch;
        $data['uni_en']=$request->uni_en;
       
        $data['price_en']=$request->price_en;
        $data['price_ch']=$request->price_ch;
        $id=$request->id;
        $edit='';
        if(isset($id)){
            $edit=Products::find($id);
        }
        if(isset($id)){
            Products::where('id',$id)->update($data);
        }else{
            Products::create($data);
        }
        return redirect('/admin/products');
    }
    public function delete_products($id)
    {
        Products::where('id',$id)->delete();
        return redirect('/admin/products');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
