@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
  <h1>
    Sub-Category
    <small>Category</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Category </a></li>

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
            <h3>Category</h3>
          </div>
          {{ Form::open(array('url' => '/admin/store_category','files'=>true)) }}
          @if($edit!='')
          {!! Form::hidden('id',$edit->id)!!}
          @endif
          <table class="table table-bordered table-striped" border="1">
            <tr>
         
              <th>Name [EN]</th>
              <td>
                <input type="text" name="category_en" value="{{@$edit->category_en}}" class="form-control">
              </td>
              <th>Name [CH]</th>
              <td>
                <input type="text" name="category_ch" value="{{@$edit->category_ch}}" class="form-control">
              </td>
            </tr>
            
            <tr>
              <th>Brief [EN]</th>
              <td colspan="5">
                <textarea class="form-control" name="brief_en">{{@$edit->brief_en}}</textarea>
              </td>
            </tr>
            <tr>
              <th>Brief [CH]</th>
              <td colspan="5">
                <textarea class="form-control" name="brief_ch">{{@$edit->brief_ch}}</textarea>
              </td>
            </tr>
            <tr>
              <td colspan="7"><input type="submit" class="btn btn-block btn-primary" value="Update"></td>
            </tr>
          </table>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="box">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="col-md-12" style="color: #79a0e0">
            <h3>Category List</h3>
          </div>
          
          <table class="table table-bordered table-striped" border="1">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name [EN]</th>
                <th>Name [CH]</th>
                <th>Brief [EN]</th>
                <th>Brief [CH]</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
              @forelse($category as $l)
              <tr>
                <td>{{++$i}}</td>
                <td>{{$l->category_en}}</td>
                <td>{{$l->category_ch}}</td>
                <td>{!!$l->brief_en!!}</td>
                <td>{!!$l->brief_ch!!}</td>
                <td>
                  <a href="{{URL::to('/admin/category/'.$l->id)}}" class="btn btn-sm btn-primary">Edit</a>
                  <a href="{{URL::to('/admin/delete_category/'.$l->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
              </tr>
              @empty

              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  CKEDITOR.replace( 'brief_en', {
    uiColor: '#9AB8F3'
  });
  CKEDITOR.replace( 'brief_ch', {
    uiColor: '#9AB8F3'
  });
  </script>
</section>
@endsection
