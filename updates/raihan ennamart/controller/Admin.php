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
    Session::put('menu', 'home');
    return view('admin.index');
}
public function featured()
{
    $data=Homepage::first();
    Session::put('menu', 'home');
    return view('admin.featured',compact('data'));
}
public function featured_update(Request $request)
{
   $md5Name = md5_file($request->file('featured_one_photo')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('featured_one_photo')->guessExtension();
    $data['featured_one_photo'] = $request->file('featured_one_photo')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('featured_one_photo')->move('uploads', $data['featured_one_photo']);

    $md5Name = md5_file($request->file('featured_two_photo')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('featured_two_photo')->guessExtension();
    $data['featured_two_photo'] = $request->file('featured_two_photo')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('featured_two_photo')->move('uploads', $data['featured_two_photo']);

    $md5Name = md5_file($request->file('featured_three_photo')->getRealPath()).rand(10,100);
    $guessExtension = $request->file('featured_three_photo')->guessExtension();
    $data['featured_three_photo'] = $request->file('featured_three_photo')->storeAs('', $md5Name.'.'.$guessExtension);
    $request->file('featured_three_photo')->move('uploads', $data['featured_three_photo']);

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
