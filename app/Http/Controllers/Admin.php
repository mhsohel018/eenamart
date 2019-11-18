<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use App\Latest;
use App\Category;
use App\SubCategory;
use App\Products;
use App\Contact;
use Session;
class Admin extends Controller
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
public function banner()
{
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.banner',compact('data'));
}
public function banner_update(Request $request)
{
    $data['id']=$request->id;
    if($request->file('banner')){
        $md5Name = md5_file($request->file('banner')->getRealPath()).rand(10,100);
        $guessExtension = $request->file('banner')->guessExtension();
        $data['banner'] = $request->file('banner')->storeAs('', $md5Name.'.'.$guessExtension);
        $request->file('banner')->move('uploads', $data['banner']);
    }

    $data['welcome_msg_en']=$request->welcome_msg_en;
    $data['welcome_msg_ch']=$request->welcome_msg_ch;
    Homepage::where('id',$data['id'])
    ->update($data);

    return redirect('/admin/banner');
}
public function about()
{
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.about',compact('data'));
}
public function about_update(Request $request)
{
    if($request->file('about_msg_photo_en')){
        $md5Name = md5_file($request->file('about_msg_photo_en')->getRealPath()).rand(10,100);
        $guessExtension = $request->file('about_msg_photo_en')->guessExtension();
        $data['about_msg_photo_en'] = $request->file('about_msg_photo_en')->storeAs('', $md5Name.'.'.$guessExtension);
        $request->file('about_msg_photo_en')->move('uploads', $data['about_msg_photo_en']);
    }

    if($request->file('about_msg_photo_ch')){
        $md5Name = md5_file($request->file('about_msg_photo_ch')->getRealPath()).rand(10,100);
        $guessExtension = $request->file('about_msg_photo_ch')->guessExtension();
        $data['about_msg_photo_ch'] = $request->file('about_msg_photo_ch')->storeAs('', $md5Name.'.'.$guessExtension);
        $request->file('about_msg_photo_ch')->move('uploads', $data['about_msg_photo_ch']);
    }
    $data['id']=$request->id;
    $data['about_msg_en']=$request->about_msg_en;
    $data['about_msg_ch']=$request->about_msg_ch;
    Homepage::where('id',$data['id'])
    ->update($data);
    return redirect('/admin/about');
}
public function service()
{   
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.service',compact('data'));
}

public function service_update(Request $request)
{
    if($request->file('service_one_en')){
    $md5Name = md5_file($request->file('service_one_en')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('service_one_en')->guessExtension();
    $data['service_one_en'] = $request->file('service_one_en')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('service_one_en')->move('uploads', $data['service_one_en']);
}
    if($request->file('service_one_ch')){
    $md5Name = md5_file($request->file('service_one_ch')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('service_one_ch')->guessExtension();
    $data['service_one_ch'] = $request->file('service_one_ch')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('service_one_ch')->move('uploads', $data['service_one_ch']);
}
    if($request->file('service_two_en')){
     $md5Name = md5_file($request->file('service_two_en')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('service_two_en')->guessExtension();
    $data['service_two_en'] = $request->file('service_two_en')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('service_two_en')->move('uploads', $data['service_two_en']);
}
    if($request->file('service_two_ch')){
    $md5Name = md5_file($request->file('service_two_ch')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('service_two_ch')->guessExtension();
    $data['service_two_ch'] = $request->file('service_two_ch')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('service_two_ch')->move('uploads', $data['service_two_ch']);
}
    if($request->file('service_three_en')){
     $md5Name = md5_file($request->file('service_three_en')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('service_three_en')->guessExtension();
    $data['service_three_en'] = $request->file('service_three_en')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('service_three_en')->move('uploads', $data['service_three_en']);
}
    if($request->file('service_three_ch')){
    $md5Name = md5_file($request->file('service_three_ch')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('service_three_ch')->guessExtension();
    $data['service_three_ch'] = $request->file('service_three_ch')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('service_three_ch')->move('uploads', $data['service_three_ch']);
}
    if($request->file('service_four_en')){
     $md5Name = md5_file($request->file('service_four_en')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('service_four_en')->guessExtension();
    $data['service_four_en'] = $request->file('service_four_en')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('service_four_en')->move('uploads', $data['service_four_en']);
}
    if($request->file('service_four_ch')){
    $md5Name = md5_file($request->file('service_four_ch')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('service_four_ch')->guessExtension();
    $data['service_four_ch'] = $request->file('service_four_ch')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('service_four_ch')->move('uploads', $data['service_four_ch']);
}
    $data['id']=$request->id;
    $data['service_msg_en']=$request->service_msg_en;
    $data['service_msg_ch']=$request->service_msg_ch;
     Homepage::where('id',$data['id'])
    ->update($data);
    return redirect('/admin/service');   
}
public function middle()
{
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.middle',compact('data'));
}
public function middle_update(Request $request)
{
    if($request->file('middle_part_photo')){
     $md5Name = md5_file($request->file('middle_part_photo')->getRealPath()).rand(10,100);
     $guessExtension = $request->file('middle_part_photo')->guessExtension();
     $data['middle_part_photo'] = $request->file('middle_part_photo')->storeAs('', $md5Name.'.'.$guessExtension);
     $request->file('middle_part_photo')->move('uploads', $data['middle_part_photo']);  
 }

 $data['id']=$request->id;
 $data['middle_part_title_en']=$request->middle_part_title_en;
 $data['middle_part_title_ch']=$request->middle_part_title_ch;
 $data['middle_part_msg_en']=$request->middle_part_msg_en;
 $data['middle_part_msg_ch']=$request->middle_part_msg_ch;
 Homepage::where('id',$data['id'])
 ->update($data);
 return redirect('/admin/middle');
}
public function latest()
{
     $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.latest',compact('data'));
}
public function latest_update(Request $request)
{
    $data['id']=$request->id;
    $data['latest_product_msg_en']=$request->latest_product_msg_en;
    $data['latest_product_msg_ch']=$request->latest_product_msg_ch;
    Homepage::where('id',$data['id'])
    ->update($data);
    return redirect('/admin/latest');
}
public function featured()
{
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.featured',compact('data'));
}
public function featured_update(Request $request)
{
    if($request->file('featured_one_photo')){
       $md5Name = md5_file($request->file('featured_one_photo')->getRealPath()).rand(10,100);
       $guessExtension = $request->file('featured_one_photo')->guessExtension();
       $data['featured_one_photo'] = $request->file('featured_one_photo')->storeAs('', $md5Name.'.'.$guessExtension);
       $request->file('featured_one_photo')->move('uploads', $data['featured_one_photo']);
   }
   if($request->file('featured_two_photo')){
    $md5Name = md5_file($request->file('featured_two_photo')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('featured_two_photo')->guessExtension();
    $data['featured_two_photo'] = $request->file('featured_two_photo')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('featured_two_photo')->move('uploads', $data['featured_two_photo']);
}
if($request->file('featured_three_photo')){
    $md5Name = md5_file($request->file('featured_three_photo')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('featured_three_photo')->guessExtension();
    $data['featured_three_photo'] = $request->file('featured_three_photo')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('featured_three_photo')->move('uploads', $data['featured_three_photo']);
}
$data['id']=$request->id;
$data['featured_msg_en']=$request->featured_msg_en;
$data['featured_msg_ch']=$request->featured_msg_ch;

$data['featured_one_title_en']=$request->featured_one_title_en;
$data['featured_one_title_ch']=$request->featured_one_title_ch;
$data['featured_two_title_en']=$request->featured_two_title_en;
$data['featured_two_title_ch']=$request->featured_two_title_ch;
$data['featured_three_title_en']=$request->featured_three_title_en;
$data['featured_three_title_ch']=$request->featured_three_title_ch;
Homepage::where('id',$data['id'])
->update($data);
return redirect('/admin/featured');
}
public function productmsg()
{
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.productmsg',compact('data'));
}
public function productmsg_update(Request $request)
{
    $data['id']=$request->id;
    $data['subscribe_msg_en']=$request->subscribe_msg_en;
    $data['subscribe_msg_ch']=$request->subscribe_msg_ch;
    Homepage::where('id',$data['id'])
    ->update($data);
    return redirect('/admin/productmsg');
}
public function subscribemsg()
{
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.subscribemsg',compact('data'));
}
public function others_update(Request $request)
{
    $data['id']=$request->id;
    $data['our_product_msg_en']=$request->our_product_msg_en;
    $data['our_product_msg_ch']=$request->our_product_msg_ch;
    $data['subscribe_msg_en']=$request->subscribe_msg_en;
    $data['subscribe_msg_ch']=$request->subscribe_msg_ch;
    Homepage::where('id',$data['id'])
    ->update($data);
    return redirect('/admin/others');
}
public function others()
{
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.others',compact('data'));
}
public function latest_product($id=NULL)
{
    Session::put('menu', 'home');
    if(isset($id)){
        Latest::where('id',$id)->delete();
        return redirect('/admin/latest_product');
    }else{
        $category=Category::all();
        $product=Products::all();
        $list=Latest::all();
        return view('admin.latest_product_list',compact('category','product','list'));
    }
}
public function get_subCategory(Request $request)
{
    $category=SubCategory::where('categoryID',$request->categoryID)
    ->select('id','sub_category_en')
    ->get();
    echo json_encode($category);
}
public function get_product(Request $request)
{
    $product=Products::where('sub_categoryID',$request->sub_categoryID)
    ->select('id','name_en')
    ->get();
    echo json_encode($product);
}
public function add_latest_product(Request $request)
{
    $data['productID']=$request->productID;
    Latest::create($data);
    return redirect('/admin/latest_product');
}
public function mail(){
    Session::put('menu', 'mail');
    $list=Contact::orderBy('id','desc')->get();
    return view('admin.mail',compact('list'));
}
}
