@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
      <h1>
        Brands
        <small>Brands</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="">Brands </a></li>

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
                <h3>Brands</h3>
              </div>
              {{ Form::open(array('url' => '/admin/brand_insert','files'=>true)) }}
              @if(isset($edit))
             {!! Form::hidden('id',$edit->id)!!}
             @endif
              <table class="table table-bordered table-striped" border="1">
               
                <tr>
                  <th>Name [EN]</th>
                  <td>
                    <input type="text" name="name_en" value="{{@$edit->name_en}}" />
                  </td>
                </tr>
                <tr>
                  <th>Name [CH]</th>
                  <td>
                    <input type="text" name="name_ch" value="{{@$edit->name_ch}}" />
                  </td>
                </tr>
                <tr>
                  <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Save"></td>
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
		<th>Action</th>
	</tr>
	@forelse($data as $d)
	<tr>
		<td>{{$d->name_en}}</td>
		<td>{{$d->name_ch}}</td>
	
		<td><a href="{{url('/admin/brands',['id'=>$d->id])}}" class="btn btn-sm btn-success">Edit</a>
			<form action="{{url('/brands/delete',['id'=>$d->id])}}" method="post">
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

     <!--  <script type="text/javascript">
      CKEDITOR.replace( 'name_en', {
          uiColor: '#9AB8F3'
      });
      CKEDITOR.replace( 'name_ch', {
          uiColor: '#9AB8F3'
      });
      </script> -->
    </section>
@endsection
