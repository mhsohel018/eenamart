@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
  <h1>
    Middle Sction
    <small>Middle Sction</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Middle Sction </a></li>

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
            <h3>Middle Sction</h3>
          </div>
          {{ Form::open(array('url' => '/admin/middle_update','files'=>true)) }}
          {!! Form::hidden('id',$data->id)!!}
          <table class="table table-bordered table-striped" border="1">
           
            <tr>
              <th>Middle Title [EN]</th>
              <td colspan="3">
                <textarea class="form-control" name="middle_part_title_en">{{$data->middle_part_title_en}}</textarea>
              </td>
            </tr>
            <tr>
              <th>Middle Title [CH]</th>
              <td colspan="3">
                <textarea class="form-control" name="middle_part_title_ch">{{$data->middle_part_title_ch}}</textarea>
              </td>
            </tr>
            <tr>
              <th>Middle Photo<br> <small>(559*693)</small> </th>
              <td>
                <input type="file" name="middle_part_photo" class="form-control">
              </td>
             
            </tr>
             <tr>
              <th> Middle Message [EN]</th>
              <td colspan="3">
                <textarea class="form-control" name="middle_part_msg_en">{{$data->middle_part_msg_en}}</textarea>
              </td>
            </tr>
            <tr>
              <th> Middle Message [CH]</th>
              <td colspan="3">
                <textarea class="form-control" name="middle_part_msg_ch">{{$data->middle_part_msg_ch}}</textarea>
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
  CKEDITOR.replace( 'middle_part_title_en', {
    uiColor: '#9AB8F3'
  });
  CKEDITOR.replace( 'middle_part_title_ch', {
    uiColor: '#9AB8F3'
  });
  </script>

  <script type="text/javascript">
  CKEDITOR.replace( 'middle_part_msg_en', {
    uiColor: '#9AB8F3'
  });
  CKEDITOR.replace( 'middle_part_msg_ch', {
    uiColor: '#9AB8F3'
  });
  </script>
</section>
@endsection
