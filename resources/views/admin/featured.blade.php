@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
  <h1>
    Featured Section
    <small>Featured Section</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Featured Section </a></li>

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
            <h3>Featured Section</h3>
          </div>
          {{ Form::open(array('url' => '/admin/featured_update','files'=>true)) }}
          {!! Form::hidden('id',$data->id)!!}
          <table class="table table-bordered table-striped" border="1">
            <tr>
              <th>featured_one Photo<br> <small>(669*721)</small></th>
              <td>
                <input type="file" name="featured_one_photo" class="form-control">
              </td>
              <th>featured_two Photo<br> <small>(470*343)</small></th>
              <td>
                <input type="file" name="featured_two_photo" class="form-control">
              </td>
               <th>featured_three Photo<br> <small>(470*343)</small></th>
              <td>
                <input type="file" name="featured_three_photo" class="form-control">
              </td>
            </tr>
            <tr>
              <th>Featured Message [EN]</th>
              <td colspan="2">
                <textarea class="form-control" name="featured_msg_en">{{$data->featured_msg_en}}</textarea>
              </td>
              <th>Fetured Message [CH]</th>
              <td colspan="2">
                <textarea class="form-control" name="featured_msg_ch">{{$data->featured_msg_ch}}</textarea>
              </td>
            </tr>
            <tr>
              <th>Featured Title_ONE [EN]</th>
              <td colspan="2">
                <input type="text" class="form-control" name="featured_one_title_en" value="{{$data->featured_one_title_en}}" />
              </td>
              <th>Featured Title_ONE [CH]</th>
              <td colspan="2">
                <input type="text" class="form-control" name="featured_one_title_ch" value="{{$data->featured_one_title_ch}}" />
              </td>
            </tr>
            <tr>
              <th>Featured Title_TWO [EN]</th>
              <td colspan="2">
                <input type="text" class="form-control" name="featured_two_title_en" value="{{$data->featured_two_title_en}}" />
              </td>
              <th>Featured Title_TWO [CH]</th>
              <td colspan="2">
                <input type="text" class="form-control" name="featured_two_title_ch" value="{{$data->featured_two_title_ch}}" />
              </td>
            </tr>
            <tr>
              <th>Featured Title_THREE [EN]</th>
              <td colspan="2">
                <input type="text" class="form-control" name="featured_three_title_en" value="{{$data->featured_three_title_en}}" />
              </td>
              <th>Featured Title_THREE [CH]</th>
              <td colspan="2">
                <input type="text" class="form-control" name="featured_three_title_ch" value="{{$data->featured_three_title_ch}}" />
              </td>
            </tr>
            <tr>
              <td colspan="6"><input type="submit" class="btn btn-block btn-primary" value="Update"></td>
            </tr>
          </table>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  CKEDITOR.replace( 'featured_msg_en', {
    uiColor: '#9AB8F3'
  });
  CKEDITOR.replace( 'featured_msg_ch', {
    uiColor: '#9AB8F3'
  });
  </script>
</section>
@endsection
