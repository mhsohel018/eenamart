@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<section class="content-header">
  <h1>
    Latest Products
    <small>Latest Products</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Latest Products </a></li>

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
            <h3>Latest Products</h3>
          </div>
          {{ Form::open(array('url' => '/admin/add_latest_product','files'=>true)) }}

          <table class="table table-bordered table-striped" border="1">
            <tr>
              <th>Category</th>
              <td>
                <select onchange="get_subCategory(this.value)" class="form-control">
                  <option value="">Select Category</option>
                  @foreach($category as $c)
                  <option value="{{$c->id}}">{{$c->category_en}}</option>
                  @endforeach
                </select>
              </td>
              <th>Sub Category</th>
              <td id="sub">
                <select disabled class="form-control">
                  <option value="">Select Sub Category</option>
                </select>
              </td>
              <th>Products</th>
              <td id="product">
                <select disabled class="form-control">
                  <option value="">Products</option>
                </select>
              </td>
              <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Save"></td>
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
            <h3>Latest Products</h3>
          </div>
          {{ Form::open(array('url' => '/admin/add_latest_product','files'=>true)) }}

          <table id="exmaple1" class="table table-bordered table-striped" border="1">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
              @forelse($list as $l)
<tr>
  <td>{{++$i}}</td>
  <td>@foreach($product as $p) @if($l->productID==$p->id) {{$p->name_en}} @endif @endforeach</td>
  <td>
    <a href="{{URL::to('admin/latest_product/'.$l->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
  </td>
</tr>
              @empty
<tr>
  <th style="color: red; text-align:center" colspan="3">No item is foud!</th>
</tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  

  function get_subCategory (id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      type: "POST",
      url: '{{URL::to('/admin/get_subCategory')}}',
      data: {
        'categoryID': id,
        _token: CSRF_TOKEN,
      },
      dataType: "json",
      success: function(data){
        var ht='<select class="form-control" name="sub_categoryID" onchange="get_product(this.value)">'
        ht+='<option>Choose</option>'
        $.each(data, function(i, obj) {
          ht+='<option value="'+obj.id+'">'+obj.sub_category_en+'</option>'
        });
        ht+='</select>'
        $('#sub').html(ht)
      }
    });
  }

  function get_product (id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      type: "POST",
      url: '{{URL::to('/admin/get_product')}}',
      data: {
        'sub_categoryID': id,
        _token: CSRF_TOKEN,
      },
      dataType: "json",
      success: function(data){
        var ht='<select class="form-control" name="productID">'
        ht+='<option>Choose</option>'
        $.each(data, function(i, obj) {
          ht+='<option value="'+obj.id+'">'+obj.name_en+'</option>'
        });
        ht+='</select>'
        $('#product').html(ht)
      }
    });
  }
  </script>
</section>
@endsection
