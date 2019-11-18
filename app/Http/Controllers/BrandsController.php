<?php

namespace App\Http\Controllers;

use App\Brands;
use Session;
use Illuminate\Http\Request;

class BrandsController extends Controller
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
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function show(Brands $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function edit(Brands $brands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brands $brands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */

public function brands($id=NULL)
{
  $edit=NULL;
    if(isset($id)){
      $edit=Brands::find($id);
    }
    $data=Brands::all();
    Session::put('menu', 'home');
    return view('admin.brands',compact('data','edit'));
}

 public function brand_insert(Request $request)
    {
      $data['id']=$request->id;
       $data['name_en']= $request->name_en;
       $data['name_ch']= $request->name_ch;
       if(isset($data['id'])){
        Brands::where('id',$data['id'])
       ->update($data);
     }else{
      Brands::create($data);
     }
       return redirect('/admin/brands');
    }

public function brands_edit($id)
    {
      $data=Brands::findOrFail($id);
      return view('admin.brands',compact('data'));
    }
public function brand_update(Request $request)
    {
       $data['id']=$request->id;
       $data['name_en']=$request->name_en;
       $data['name_ch']=$request->name_ch;
       Brands::where('id',$data['id'])
       ->update($data);
   }
public function brands_destroy($id)
 {

  $d= Brands::findOrFail($id);
        $d->delete();
        
  return redirect('/admin/brands');
 }


}
