<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function category($id=NULL)
    {
        Session::put('menu', 'products');
        return view('admin.index');
    }
    public function sub_category($id=NULL)
    {
        Session::put('menu', 'products');
        $category=Category::all();
        $list=SubCategory::all();
        $edit='';
        if(isset($id)){
            $edit=Subcategory::find($id);
        }
        return view('admin.sub_category',compact('category','edit','list'));
    }
    public function store_sub_category(Request $request)
    {
        $data['categoryID']=$request->categoryID;
        $data['sub_category_en']=$request->sub_category_en;
        $data['sub_category_ch']=$request->sub_category_ch;
        $data['brief_en']=$request->brief_en;
        $data['brief_ch']=$request->brief_ch;
        $id=$request->id;
        if(isset($id)){
            Subcategory::where('id',$id)->update($data);
        }else{
            Subcategory::create($data);
        }
        return redirect('/admin/sub_category');
    }
    public function delete_sub_category($id)
    {
        Subcategory::where('id',$id)->delete();
        return redirect('/admin/sub_category');
    }
    public function index()
    {
        return view('admin.index');
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
