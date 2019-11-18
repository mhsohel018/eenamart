<?php

namespace App\Http\Controllers;

use App\Source;
use App\Homepage;
use Session;
use Illuminate\Http\Request;

class SourceController extends Controller
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

    public function source($id=NULL)
  {
      $edit=NULL;
      if(isset($id)){
      $edit=Source::find($id);
    }

    $data=Source::all();
    Session::put('menu', 'source');
    return view('admin.source',compact('data','edit'));
  }
   
    public function sourec_insert(Request $request)
    {
       $data['id']=$request->id;
       $data['name_en']= $request->name_en;
       $data['name_ch']= $request->name_ch;
       $data['designation_en']= $request->designation_en;
       $data['designation_ch']= $request->designation_ch;

       if($request->file('photo')){
       $md5Name = md5_file($request->file('photo')->getRealPath()).rand(10,100);
       $guessExtension = $request->file('photo')->guessExtension();
       $data['photo'] = $request->file('photo')->storeAs('', $md5Name.'.'.$guessExtension);
       $request->file('photo')->move('uploads', $data['photo']);
       } else{}

       $data['description_en']= $request->description_en;
       $data['description_ch']= $request->description_ch;
       if(isset($data['id'])){
        Source::where('id',$data['id'])
       ->update($data);
     }else{
      Source::create($data);
     }
      return redirect('/admin/source');
   }
       
     public function source_edit($id)
    {
      $data=Source::findOrFail($id);
      return view('admin.source',compact('data'));
    }

   public function source_destroy($id)
{
        $d= Source::findOrFail($id);
        $d->delete();
        
         return redirect('/admin/source');
}
   
}
