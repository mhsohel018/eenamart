<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{URL::to('admin_asset/admin/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::to('admin_asset/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{URL::to('admin_asset/admin/plugins/datatables/dataTables.bootstrap.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('admin_asset/admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{URL::to('admin_asset/admin/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('jquery-ui-1.12.1/jquery-ui.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="" class="logo">
          <span class="logo-mini"><b>STK</b></span>
          <span class="logo-lg"><b>CONTROL PANEL</b></span>
        </a>
        <nav class="navbar navbar-static-top">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">


            <ul class="nav navbar-nav">
              <li><a href="" target="_blank"><i class="fa fa-globe"></i></a></li>
              <li><a href="Control/publish"><i class="fa fa-refresh"></i></a></li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{URL::to('admin_asset/admin/dist/img/avatar5.png')}}" class="user-image"
                  alt="User Image">
                  <span class="hidden-xs">
                    {{ Auth::user()->name }}
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="{{URL::to('admin_asset/admin/dist/img/avatar5.png')}}" class="img-circle"
                    alt="User Image">

                    <p>
                      {{ Auth::user()->name }}
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                      </div>
                      <div class="col-xs-4 text-center">
                      </div>
                      <div class="col-xs-4 text-center">
                      </div>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">                               
                    </div>
                    <div class="pull-right">
                      <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                      <!-- <a href="" class="btn btn-default btn-flat">Sign out</a> -->
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview ">
              <a href="#">
                <i class="fa fa-wpexplorer fa-2x"></i> <span> &nbsp;&nbsp; Dashboard</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href=""><i class="fa fa-circle-o"></i>
                  Dashboard </a></li>
                </ul>
              </li>

              <li class="treeview @if(Session::get('menu')=='home') active @endif">
                <a href="#">
                  <i class="fa fa-clone"></i> <span>Home Page</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="{{ URL::to('/admin/banner') }}"><i class="fa fa-list-alt"></i>
                    Banner </a></li>
                    <li class="active"><a href="{{ URL::to('/admin/about') }}"><i class="fa fa-list-alt"></i>
                    About </a></li>
                    <li class="active"><a href="{{ URL::to('/admin/service') }}"><i class="fa fa-list-alt"></i>
                    Service </a></li>
                    <li class="active"><a href="{{ URL::to('/admin/middle') }}"><i class="fa fa-list-alt"></i>
                    Middle Part </a></li>
                    <li class="active"><a href="{{ URL::to('/admin/latest') }}"><i class="fa fa-list-alt"></i>
                    Latest Product</a></li>
                    <li class="active"><a href="{{ URL::to('/admin/featured') }}"><i class="fa fa-list-alt"></i>
                    Featured</a></li>
                    <li class="active"><a href="{{ URL::to('/admin/others') }}"><i class="fa fa-list-alt"></i>
                    Others</a></li>
                  </ul>
                </li>
                <li class="treeview @if(Session::get('menu')=='home') active @endif">
                <a href="#">
                  <i class="fa fa-clone"></i> <span>Products</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="{{ URL::to('/admin/category') }}"><i class="fa fa-list-alt"></i>
                    Category </a></li>
                  </ul>
                </li>
                <li class="treeview ">
                <a href="#">
                  <i class="fa fa-clone"></i> <span>Admin</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="{{ route('register') }}"><i class="fa fa-list-alt"></i>
                    Admin List </a></li>
                  </ul>
                </li>


              </section>
              <!-- /.sidebar -->
            </aside>


            <div class="content-wrapper">
              @yield('content')

            </div>

            <footer class="main-footer">
              <strong>Copyright &copy; 2016-2017 <a href="whatsapp://send?phone=8801735254295&text=I want to develop a software for my business. Please text me back.&source=&data=" target="_blank" >Morshed Habib</a>.</strong> All rights
              reserved.
            </footer>
            <script src="{{URL::to('admin_asset/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
            <!-- Bootstrap 3.3.6 -->
            <script src="{{URL::to('admin_asset/admin/bootstrap/js/bootstrap.min.js')}}"></script>
            <!-- DataTables -->
            <script src="{{URL::to('admin_asset/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{URL::to('admin_asset/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
            <!-- SlimScroll -->
            <script src="{{URL::to('admin_asset/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
            <!-- FastClick -->
            <script src="{{URL::to('admin_asset/admin/plugins/fastclick/fastclick.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{URL::to('admin_asset/admin/dist/js/app.min.js')}}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{URL::to('admin_asset/admin/dist/js/demo.js')}}"></script>

            <script src="{{URL::to('admin_asset/admin/plugins/ckeditor/ckeditor.js')}}"></script>
            <!-- page script -->


            <script src="{{URL::to('jquery-ui-1.12.1/jquery-ui.min.js')}}j"></script>
            <script>
            $(function () {
              $("#example1").DataTable({
                buttons: [
                'print'
                ]
              } );
              $("#example3").DataTable();
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
              });
            });

            </script>
            <script>
            $( function() {
              $( ".date" ).datepicker({
                dateFormat: "yy-mm-dd"
              });
            } );
            </script>
            @yield('footer')
          </body>
          </html>