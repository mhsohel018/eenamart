<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
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
    $md5Name = md5_file($request->file('banner')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('banner')->guessExtension();
    $data['banner'] = $request->file('banner')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('banner')->move('uploads', $data['banner']);

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
   $md5Name = md5_file($request->file('about_msg_photo_en')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('about_msg_photo_en')->guessExtension();
    $data['about_msg_photo_en'] = $request->file('about_msg_photo_en')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('about_msg_photo_en')->move('uploads', $data['about_msg_photo_en']);

    $md5Name = md5_file($request->file('about_msg_photo_ch')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('about_msg_photo_ch')->guessExtension();
    $data['about_msg_photo_ch'] = $request->file('about_msg_photo_ch')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('about_msg_photo_ch')->move('uploads', $data['about_msg_photo_ch']);

    $data['id']=$request->id;
    $data['about_msg_en']=$request->about_msg_en;
    $data['about_msg_ch']=$request->about_msg_ch;
    Homepage::where('id',$data['id'])
    ->update($data);
    return redirect('/admin/about');
}
public function service()
{
    Session::put('menu', 'home');
    return view('admin.index');
}
public function middle()
{
    Session::put('menu', 'home');
    return view('admin.index');
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
    Session::put('menu', 'home');
    return view('admin.index');
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
public function subscribemsg_update(Request $request)
{
    $data['id']=$request->id;
    $data['subscribe_msg_en']=$request->subscribe_msg_en;
    $data['subscribe_msg_ch']=$request->subscribe_msg_ch;
    Homepage::where('id',$data['id'])
    ->update($data);
    return redirect('/admin/subscribemsg');
}

public function others()
{
    Session::put('menu', 'home');
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
