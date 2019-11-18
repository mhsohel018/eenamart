@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
  <h1>
    Products
    <small>Products</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="">Products </a></li>

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
            <h3>Products</h3>
          </div>
          {{ Form::open(array('url' => '/admin/store_products','files'=>true)) }}
          @if($edit!='')
          {!! Form::hidden('id',$edit->id)!!}
          @endif
          <table class="table table-bordered table-striped" border="1">
            <tr>
              <th>Category ID</th>
              <td>
                <select name="categoryID" class="form-control">
                  <option value="">Select Category</option>
                  <?php foreach ($category as $k) {?>
                  <option value="<?php echo $k->id ?>"<?php if($k->id==@$edit->categoryID){ echo "selected";} ?>> <?php echo $k->category_en ?></option>
                  <?php } ?>
                </select>
              </td>
              <th>Sub-Category ID</th>
              <td>
                <select name="sub_categoryID" class="form-control">
                  <option value="">Select Sub-Category</option>
                  <?php foreach ($subcat as $k) {?>
                  <option value="<?php echo $k->id ?>"<?php if($k->id==@$edit->sub_categoryID){ echo "selected";} ?>> <?php echo $k->sub_category_en ?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <th>Name [EN]</th>
              <td>
                <input type="text" name="name_en" value="{{@$edit->name_en}}" class="form-control">
                
              </td>
              <th>Name [CH]</th>
              <td>
               <input type="text" name="name_ch" value="{{@$edit->name_ch}}" class="form-control">
             </td>
           </tr>
           <tr>
            <th>Description [EN]</th>
            <td>
              <textarea class="form-control" name="description_en">{{@$edit->description_en}}</textarea>
            </td>
            <th>Description [CH]</th>
            <td >
              <textarea class="form-control" name="description_ch">{{@$edit->description_ch}}</textarea>
            </td>
          </tr>
          <tr>
            <th>Price [EN]</th>
            <td>
              <input type="text" name="price_en" value="{{@$edit->price_en}}" class="form-control">
              
            </td>
            <th>Price [CH]</th>
            <td>
             <input type="text" name="price_ch" value="{{@$edit->price_ch}}" class="form-control">
           </td>
         </tr>
         <tr>
          <th>MRP [EN]</th>
          <td>
            <input type="text" name="mrp_en" value="{{@$edit->mrp_en}}" class="form-control">
            
          </td>
          <th>MRP [CH]</th>
          <td>
           <input type="text" name="mrp_ch" value="{{@$edit->mrp_ch}}" class="form-control">
         </td>
       </tr>
       <tr>
        <th>Unit [EN]</th>
        <td>
          <input type="text" name="uni_en" value="{{@$edit->uni_en}}" class="form-control">
          
        </td>
        <th>Unit [CH]</th>
        <td>
         <input type="text" name="unit_ch" value="{{@$edit->unit_ch}}" class="form-control">
       </td>
       
     </tr>
     <tr>
      <th>Brand ID</th>
      <td>
        <select name="brandID" class="form-control">
          <option value="">Select Brand</option>
          <?php foreach ($brand as $k) {?>
          <option value="<?php echo $k->id ?>"<?php if($k->id==@$edit->brandID){ echo "selected";} ?>> <?php echo $k->name_en ?></option>
          <?php } ?>
        </select>
      </td>
      <th>STATUS</th>
      <td>
        <input type="radio" name="status" value="IN STOCK" @if(@$edit->status=='IN STOCK') checked @endif>IN STOCK
        <input type="radio" name="status" value="OUT OF STOCK" @if(@$edit->status=='OUT OF STOCK') checked @endif>OUT OF STOCK
      </td>
      
    </tr>
    <tr>
      <th>Photo<br> <small>(735*413)</small></th>
      <td>
        <input type="file" name="photo" class="form-control">
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
          <h3>Products List</h3>
        </div>
        
        <table class="table table-bordered table-striped" border="1">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name [EN]</th>
              <th>Price</th>
              <th>Unit</th>
              <th>Status</th>
              <th>Brand ID</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; ?>
            @forelse($products as $l)
            <tr>
              <td>{{++$i}}</td>
              <td>{{$l->name_en}}</td>
              <td>{{$l->price_en}}</td>
              <td>{!!$l->uni_en!!}</td>
              <td>{!!$l->status!!}</td>
              <td>
                @foreach($brand as $b)
                @if($b->id==$l->brandID) {{$b->name_en}} @endif
                @endforeach
              </td>
              <td>
                <a href="{{URL::to('/admin/products/'.$l->id)}}" class="btn btn-sm btn-primary">Edit</a>
                <a href="{{URL::to('/admin/delete_products/'.$l->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
CKEDITOR.replace( 'description_en', {
  uiColor: '#9AB8F3'
});
CKEDITOR.replace( 'description_ch', {
  uiColor: '#9AB8F3'
});
</script>
</section>
@endsection
