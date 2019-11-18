@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
  <h1>
    Product Messege Sction
    <small>Product Messege Sction</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Product Messege Sction </a></li>

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
            <h3>Product Messege Sction</h3>
          </div>
          {{ Form::open(array('url' => '/admin/productmsg_update','files'=>true)) }}
          {!! Form::hidden('id',$data->id)!!}
          <table class="table table-bordered table-striped" border="1">
           
            <tr>
              <th>Message [EN]</th>
              <td colspan="2">
                <textarea class="form-control" name="our_product_msg_en">{{$data->our_product_msg_en}}</textarea>
              </td>
            </tr>
            <tr>
              <th>Message [CH]</th>
              <td colspan="2">
                <textarea class="form-control" name="our_product_msg_ch">{{$data->our_product_msg_ch}}</textarea>
              </td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Update"></td>
            </tr>
          </table>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  CKEDITOR.replace( 'our_product_msg_en', {
    uiColor: '#9AB8F3'
  });
  CKEDITOR.replace( 'our_product_msg_ch', {
    uiColor: '#9AB8F3'
  });
  </script>
</section>
@endsection
