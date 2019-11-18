<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Session;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=About::first();
        Session::put('menu', 'about');
        return view('admin.about_entry',compact('data'));
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
        $data['id']=$request->id;
    if($request->file('photo')){
        $md5Name = md5_file($request->file('photo')->getRealPath()).rand(10,100);
        $guessExtension = $request->file('photo')->guessExtension();
        $data['photo'] = $request->file('photo')->storeAs('', $md5Name.'.'.$guessExtension);
        $request->file('photo')->move('uploads', $data['photo']);
    }

    $data['brief_en']=$request->brief_en;
    $data['brief_ch']=$request->brief_ch;
    About::where('id',$data['id'])
    ->update($data);

    return redirect('/admin/about_entry');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
