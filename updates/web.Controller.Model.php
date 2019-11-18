///web.php
Route::post('/admin/service_update', 'Admin@service_update');\\\


///Admin.php
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
}\\\\\\\\

////Model

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
   protected $table='homepage';
   protected $primaryKey = 'id';
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
   protected $dateFormat = 'Y-m-d H:i:s';
   protected $fillable= [
   	
   	'service_msg_en',
    'service_msg_ch',
   	'service_one_en',
    'service_one_ch',
    'service_two_en',
   	'service_two_ch',
   	'service_three_en',
   	'service_three_ch',
   	'service_four_en',
   	'service_four_ch',
   	  ];
}\\\\\\














