<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;
use Session; 
class SettingsController extends Controller
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
    public function index()
    {
        //
    }
    public function settings()
    {
        $data=Settings::first();
        Session::put('menu', 'settings');
        return view('admin.settings',compact('data'));
    }
    public function settings_update(Request $request)
    {
        if($request->file('logo')){
            $md5Name = md5_file($request->file('logo')->getRealPath()).rand(10,100);
            $guessExtension = $request->file('logo')->guessExtension();
            $data['logo'] = $request->file('logo')->storeAs('', $md5Name.'.'.$guessExtension);
            $request->file('logo')->move('uploads', $data['logo']);
        }
        $data['id']=$request->id;
        $data['source_brief_en']=$request->source_brief_en;
        $data['source_brief_ch']=$request->source_brief_ch;
        $data['contact_brief_en']=$request->contact_brief_en;
        $data['contact_brief_ch']=$request->contact_brief_ch;
        $data['address_en']=$request->address_en;
        $data['address_ch']=$request->address_ch;
        $data['phone_en']=$request->phone_en;
        $data['phone_ch']=$request->phone_ch;
        $data['map']=$request->map;

        Settings::where('id',$data['id'])
        ->update($data);

        return redirect('/admin/settings');
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
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
