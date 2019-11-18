@extends('layouts.main')
@section('title') Dashboard | ENNA MART @stop
@section('content')
<section class="content-header">
      <h1>
        Add Admin
        <small>Admin List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL::to('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="">Add Admin </a></li>

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
                <h3>Admin List</h3>
              </div>
              <table id="example1" class="table table-bordered table-striped" border="1">
                <thead style="background-color: #79a0e0">
                  <tr>
                    <th width="5%">SL</th>
                    <th width="20%">Name</th>
                    <th width="20%">Email</th>
                    <th width="5%">Photo</th>
                    <th width="5%">Status</th>
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                <tbody id="itembody">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      
    </section>
@endsection
