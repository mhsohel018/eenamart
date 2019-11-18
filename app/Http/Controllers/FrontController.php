<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App;
use App\Homepage;
use App\Settings;
use App\Category;
use App\SubCategory;
use App\Latest;
use App\Products;
use App\About;
use App\Brands;
use App\Source;
use Lang;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(){
        $locale=Lang::getLocale();
        session()->put('locale', $locale);
    }
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
    public function index()
    {
        $data=Homepage::first();
        $latest=Latest::orderBy('id','desc')->get();
        $category=Category::all();
        $product=Products::all();
        Session::put('menu', 'home');
        return view('front/index',compact('data','latest','category','product'));
    }
    public function shop($id=NULL)
    {
        Session::put('menu', 'shop');
        if(isset($id)){
            $subcategory_1['list']=SubCategory::where('id',$id)->get();
            $subcategory_1['type']='one';
        }else{
            $subcategory_1['list']=SubCategory::all();
            $subcategory_1['type']='all';
        }
        $subcategory=SubCategory::all();
        $category=Category::all();
        $latest=Latest::join('products','products.id','=','latest_product.productID')
        ->get();
        return view('front/shop',compact('category','latest','subcategory','subcategory_1'));
    }
    public function contact()
    {
        Session::put('menu', 'contact');
        $data=Settings::first();
        return view('front/contact',compact('data'));
    }
    public function about()
    {
        Session::put('menu', 'about');
        $data=About::first();
        return view('front/about',compact('data'));
    }
    public function source()
    {
        Session::put('menu', 'source');
        $data=Settings::first();
        $list=Source::orderBy('id','desc')->get();
        return view('front/source',compact('data','list'));
    }
    public function product($id)
    {
        Session::put('menu', 'shop');
        $product=Products::join('brands','brands.id','=','products.brandID')
        ->select('products.*','brands.name_en as b_en','brands.name_ch as b_ch')
        ->find($id);
        return view('front/product',compact('product'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
