@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
  <h1>
    Service Sction
    <small>Service Sction</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Service Sction </a></li>

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
            <h3>Service Sction</h3>
          </div>
          {{ Form::open(array('url' => '/admin/service_update','files'=>true)) }}
          {!! Form::hidden('id',$data->id)!!}
          <table class="table table-bordered table-striped" border="1">
            <tr>
              <th>Service One Photo [EN]<br> <small>(270*546)</small></th>
              <td>
                <input type="file" name="service_one_en" class="form-control">
              </td>
              <th>Service One Photo [CH]<br> <small>(270*546)</small></th>
              <td>
                <input type="file" name="service_one_ch" class="form-control">
              </td>
            </tr>
            <tr>
              <th>Service Two Photo [EN]<br> <small>(270*546)</small></th>
              <td>
                <input type="file" name="service_two_en" class="form-control">
              </td>
              <th>Service Two Photo [CH]<br> <small>(270*546)</small></th>
              <td>
                <input type="file" name="service_two_ch" class="form-control">
              </td>
            </tr>
            <tr>
              <th>Service Three Photo [EN<br> <small>(270*546)</small>th>
              <td>
                <input type="file" name="service_three_en" class="form-control">
              </td>
              <th>Service Three Photo [CH]<br> <small>(270*546)</small></th>
              <td>
                <input type="file" name="service_three_ch" class="form-control">
              </td>
            </tr>
            <tr>
              <th>Service Four Photo [EN]<br> <small>(270*546)</small></th>
              <td>
                <input type="file" name="service_four_en" class="form-control">
              </td>
              <th>Service Four Photo [CH]<br> <small>(270*546)</small></th>
              <td>
                <input type="file" name="service_four_ch" class="form-control">
              </td>
            </tr>
            <tr>
              <th>Message [EN]</th>
              <td colspan="3">
                <textarea class="form-control" name="service_msg_en">{{$data->service_msg_en}}</textarea>
              </td>
            </tr>
            <tr>
              <th>Message [CH]</th>
              <td colspan="3">
                <textarea class="form-control" name="service_msg_ch">{{$data->service_msg_ch}}</textarea>
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
  CKEDITOR.replace( 'service_msg_en', {
    uiColor: '#9AB8F3'
  });
  CKEDITOR.replace( 'service_msg_ch', {
    uiColor: '#9AB8F3'
  });
  </script>
</section>
@endsection
