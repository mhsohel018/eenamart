@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
      <h1>
        Banner
        <small>Banner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="">Banner </a></li>

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
                <h3>Banner</h3>
              </div>
              {{ Form::open(array('url' => '/features_update','files'=>true)) }}
{!! Form::hidden('id',$data->id)!!}
              <table class="table table-bordered table-striped" border="1">
                <tr>
                  <th>Banner Photo</th>
                  <td>
                    <input type="file" name="banner">
                  </td>
                </tr>
                <tr>
                  <th>Message [EN]</th>
                  <td>
                    <textarea class="form-control" name="welcome_msg_en">{{$data->welcome_msg_en}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Message [CH]</th>
                  <td>
                    <textarea class="form-control" name="welcome_msg_ch">{{$data->welcome_msg_ch}}</textarea>
                  </td>
                </tr>
              </table>
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">
      CKEDITOR.replace( 'welcome_msg_en', {
          uiColor: '#9AB8F3'
      });
      CKEDITOR.replace( 'welcome_msg_ch', {
          uiColor: '#9AB8F3'
      });
      </script>
    </section>
@endsection
