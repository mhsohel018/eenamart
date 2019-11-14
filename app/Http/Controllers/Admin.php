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
    public function about()
    {
        Session::put('menu', 'home');
        return view('admin.index');
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
        Session::put('menu', 'home');
        return view('admin.index');
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
