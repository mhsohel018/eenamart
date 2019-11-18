
@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
  <h1>
    Source Sction
    <small>Source Sction</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Source Sction </a></li>

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
            <h3>Source Sction</h3>
          </div>
          {{ Form::open(array('url' => '/admin/sourec_insert','files'=>true)) }}
             @if(isset($edit))
             {!! Form::hidden('id',$edit->id)!!}
             @endif
          
            <table class="table table-bordered table-striped" border="1">
            
            <tr>
              <th>Name [EN]</th>
              <td colspan="3">
                <textarea class="form-control" name="name_en">{{@$edit->name_en}}</textarea>
              </td>

              <th>Name [CH]</th>
              <td colspan="3">
                <textarea class="form-control" name="name_ch" >{{@$edit->name_ch}}</textarea>
              </td>
            </tr>
            <tr>
              <th>Designation [EN]</th>
              <td colspan="3">
                <input type="text" name="designation_en" value="{{@$edit->designation_en}}" class="form-control">
              </td>

              <th>Designation [CH]</th>
              <td colspan="3">
                <input type="text" name="designation_ch" value="{{@$edit->designation_ch}}" class="form-control">
              </td>
            </tr>

             <tr>
              <th>Source Photo<br> <small>(600*502)</small></th>
              <td colspan="5">
                <input type="file" name="photo" class="form-control"  />
              </td>
          
            </tr>

              <tr>
              <th>description [EN]</th>
              <td colspan="3">
                <textarea class="form-control" name="description_en" >{{@$edit->description_en}}</textarea>
              </td>

              <th>description [CH]</th>
              <td colspan="3">
                <textarea class="form-control" name="description_ch" >{{@$edit->description_ch}}</textarea>
              </td>
            </tr>
            <tr>
              <td colspan="6"><input type="submit" class="btn btn-block btn-primary" value="submit"></td>
            </tr>
          </table>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

  
  <table class="table table-borderd">
  <tr>
    <th>Name EN</th>
    <th>Name CH</th>  
    <th>designation CH</th>  
    <th>designation CH</th>  
    <th>Name CH</th>     
    <th>Action</th>
  </tr>
  @forelse($data as $d)
  <tr>
    <td>{!!$d->name_en!!}</td>
    <td>{!!$d->name_ch!!}</td>
    <td>{!!$d->designation_en!!}</td>
    <td>{!!$d->designation_ch!!}</td>
    <td>{!!$d->name_ch!!}</td>
  
    <td><a href="{{url('/admin/source',['id'=>$d->id])}}" class="btn btn-sm btn-success">Edit</a>
      <form action="{{url('/source/delete',['id'=>$d->id])}}" method="post">
          <input class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')" type="submit" value="Delete">
          @method('delete')
          @csrf
        </form>
    </td>
  </tr>
  @empty
  <tr>
    <td>Item not Found!</td>
  </tr>
  @endforelse
</table>



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
