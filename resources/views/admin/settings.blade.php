@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
      <h1>
        Settings
        <small>Settings</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="">Settings </a></li>

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
                <h3>Settings</h3>
              </div>
              {{ Form::open(array('url' => '/admin/settings_update','files'=>true)) }}
{!! Form::hidden('id',$data->id)!!}
              <table class="table table-bordered table-striped" border="1">
                
                <tr>
                  <th>Source Brief [EN]</th>
                  <td>
                    <textarea class="form-control" name="source_brief_en">{{$data->source_brief_en}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Source Brief [CH]</th>
                  <td>
                    <textarea class="form-control" name="source_brief_ch">{{$data->source_brief_ch}}</textarea>
                  </td>
                </tr>
                <tr>
                  <tr>
                  <th>Contact Brief [EN]</th>
                  <td>
                    <textarea class="form-control" name="contact_brief_en">{{$data->contact_brief_en}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Contact Brief [CH]</th>
                  <td>
                    <textarea class="form-control" name="contact_brief_ch">{{$data->contact_brief_ch}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Map</th>
                  <td>
                    <textarea class="form-control" name="map">{{$data->map}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Address [EN]</th>
                  <td>
                    <textarea class="form-control" name="address_en">{{$data->address_en}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Address [CH]</th>
                  <td>
                    <textarea class="form-control" name="address_ch">{{$data->address_ch}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Phone [EN]</th>
                  <td>
                    <textarea class="form-control" name="phone_en">{{$data->phone_en}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Phone [CH]</th>
                  <td>
                    <textarea class="form-control" name="phone_ch">{{$data->phone_ch}}</textarea>
                  </td>
                </tr>
                <tr>
                  <th>Logo</th>
                  <td>
                    <input type="file" name="logo" class="form-control">
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
      CKEDITOR.replace( 'source_brief_en', {
          uiColor: '#9AB8F3'
      });
      CKEDITOR.replace( 'source_brief_ch', {
          uiColor: '#9AB8F3'
      });
       CKEDITOR.replace( 'contact_brief_en', {
          uiColor: '#9AB8F3'
      });
      CKEDITOR.replace( 'contact_brief_ch', {
          uiColor: '#9AB8F3'
      });
      </script>
    </section>
@endsection
