
@extends('layouts.main')
@section('title') Mail List | ENNA MART @stop
@section('content')
<section class="content-header">
  <h1>
    Mail List
    <small>Mail List</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Mail List </a></li>

  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="box">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="col-md-12" style="color: #79a0e0">
          
          </div>
          <table class="table table-borderd">
  <tr>
      <th>SL</th>
    <th>Name </th>
    <th>Email</th>  
    <th>Subject</th>  
    <th>Message</th>   
  </tr>
  <?php  $i=0;?>
  @forelse($list as $d)
  <tr>
      <td>{{++$i}}</td>
    <td>{!!$d->name!!}</td>
    <td>{!!$d->email!!}</td>
    <td>{!!$d->subject!!}</td>
    <td>{!!$d->message!!}</td>
  </tr>
  @empty
  <tr>
    <td>Item not Found!</td>
  </tr>
  @endforelse
</table>
        </div>
      </div>
    </div>
  </div>

  
  



  <script type="text/javascript">
 
 
  CKEDITOR.replace( 'description_en', {
    uiColor: '#9AB8F3'
  });
  CKEDITOR.replace( 'description_ch', {
    uiColor: '#9AB8F3'
  });
  </script>
</section>
@endsection
