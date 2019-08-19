
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title Page-->
    <title>Klasifikasi | @yield('title')</title>


{{-- template baru --}}
<link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{asset('admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">

<link rel="stylesheet" type="text/css" href="/pathto/css/sweetalert.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">




</head>

<body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

                <header class="main-header">
              
                  <!-- Logo -->
                  <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <img src="{{asset('img/logo-projek.png')}}" width="200" height="50" alt="">
                  
                    {{-- <span class="logo-lg"><b>Admin</b>LTE</span> --}}
                  </a>
              
                  <!-- Header Navbar: style can be found in header.less -->
                  <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                      <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                      <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                          
                        
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                          
                          
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                          
                          
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          {{-- {{ config('app.name', 'Laravel') }} --}}

                          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                          <span class="hidden-xs">{{Auth::user()->name}}</span>
                          </a>
                          <ul class="dropdown-menu">
                            <!-- User image -->
                           
                            <!-- Menu Body -->
                           
                            <!-- Menu Footer-->
                            <li class="user-footer">
                             
                              <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit(); ">Logout</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf </form>
                                {{-- <a href="#" class="btn btn-default btn-flat">Sign out</a> --}}
                              </div>
                            </li>
                          </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        
                      </ul>
                    </div>
              
                  </nav>
                </header>
                <!-- Left side column. contains the logo and sidebar -->
                <aside class="main-sidebar">
                  <!-- sidebar: style can be found in sidebar.less -->
                  <section class="sidebar">
                    <!-- Sidebar user panel -->
                   
                    <!-- search form -->
                    
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                      <li class="header">MAIN NAVIGATION</li>
                      <li class="active treeview menu-open">
                        <a href="#">
                          <i class="fa fa-dashboard"></i> <span>Menu</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                        <li  class="" ><a href="{{route('index')}}"><i class="fa fa-circle-o"></i> Data Training </a></li>
                        <li><a href="{{route('testing')}}"><i class="fa fa-circle-o"></i> Data Testing</a></li>
                        </ul>
                      </li>
                      
                     
                      
                    </ul>
                  </section>
                  <!-- /.sidebar -->
                </aside>
              
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                  <!-- Content Header (Page header) -->
                  <section class="content-header">
                    <h1>
                      Dashboard
                      <small>Version 2.0</small>
                    </h1>
                    <ol class="breadcrumb">
                      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                      <li class="active">Dashboard</li>
                    </ol>
                  </section>
              
                  <!-- Main content -->
                  <section class="content">
                    <!-- Info boxes -->
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                          <span class="info-box-icon bg-green"><i class="fa  fa-paw"></i></span>
              
                          <div class="info-box-content">
                            <span class="info-box-text">Divisi Survival [Training]</span>
                          <span class="info-box-number">{{($div_survival->count())}}</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                          <span class="info-box-icon bg-red"><i class="fa fa-plus-circle"></i></span>
              
                          <div class="info-box-content">
                            <span class="info-box-text">Divisi SAR [Training]</span>
                          <span class="info-box-number">{{($div_sar->count())}}</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                          <span class="info-box-icon bg-blue"><i class="fa fa-hand-paper-o"></i></span>
              
                          <div class="info-box-content">
                            <span class="info-box-text"> Divisi RC [Training]</span>
                          <span class="info-box-number">{{($div_rc->count())}}</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
              
                      <!-- fix for small devices only -->
                      <div class="clearfix visible-sm-block"></div>
              
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
              
                          <div class="info-box-content">
                            <span class="info-box-text">Divisi Survival [Testing]</span>
                          <span class="info-box-number">{{($div_survival_test->count())}}</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
              
                          <div class="info-box-content">
                            <span class="info-box-text">Divisi SAR [Testing]</span>
                          <span  class="info-box-number">{{($div_sar_test->count())}}</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
              
                          <div class="info-box-content">
                            <span class="info-box-text">Divisi RC [Testing]</span>
                          <span class="info-box-number">{{($div_rc_test->count())}}</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                    </div>
               

            @yield('index')
                      
                     
                    <!-- /.row -->
                  </section>
                  <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
              
                <footer class="main-footer">
                  <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.12
                  </div>
                  <strong>Copyright &copy; 2019 Tugas Akhir.</strong> All rights
                  reserved.
                </footer>
              
                

    
    <!-- modal medium -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">View Testing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                 
                        <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">id</label>
                                </div>
                                <div class="col-12 col-md-9">
                        <input id="id" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
                                </div>
                            </div>
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                            <input id="nama_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
    
                                    
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">NIS</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                <input id="nis_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
        
                                        
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Nilai Gunung Hutan</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                    <input id="n_gh_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
            
                                            
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="text-input" class=" form-control-label">Nilai PPGD</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                  <input id="n_ppgd_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
          
                                          
                                          </div>
                                      </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nilai SAR</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                        <input id="n_sar_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
                
                                                
                                                </div>
                                            </div><div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Nilai IMPK</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                            <input id="n_impk_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
                    
                                                    
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Nilai Repling</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                <input id="n_repling_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
                        
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">Nilai Sebrang Kering</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                    <input id="n_sebrang_kering_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
                            
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="text-input" class=" form-control-label">Minat</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                        <input id="minat_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
                                
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Nilai Divisi [label]</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                            <input id="divisi_test" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/>
                                    
                                                                    
                                                                    </div>
                                                                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {{-- <form method="get" action="{{route('print')}}">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-download"></i>&nbsp;Download Hasil</button>

                    </form> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- end modal medium -->

    

         
<!-- jQuery 3 -->
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin/bower_components/chart.js/Chart.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script> 
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  --}}
<!-- SlimScroll -->



    

    <!-- Main JS-->
    {{-- <script src="{{asset('main/js/main.js')}}"></script> --}}
    {{-- <script src="{{asset('js/main.js')}}"></script> --}}


    <script>

            $('#mediumModal').on('show.bs.modal', function (event){
                // console.log('opened');
                console.log('id');
    
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var nama_test               = button.data('nama_test');
                var nis_test                     = button.data('nis_test');
                var n_gh_test               = button.data('n_gh_test');
                var n_ppgd_test             = button.data('n_ppgd_test');
                var n_sar_test              = button.data('n_sar_test');
                var n_impk_test             = button.data('n_impk_test');
                var n_repling_test          = button.data('n_repling_test');
                var n_sebrang_kering_test   = button.data('n_sebrang_kering_test');
                var minat_test            = button.data('minat_test');
                var divisi_test             = button.data('divisi_test');
                var modal = $(this);
                
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #nama_test').val(nama_test);
                modal.find('.modal-body #nis_test').val(nis_test);
                modal.find('.modal-body #n_gh_test').val(n_gh_test);
                modal.find('.modal-body #n_ppgd_test').val(n_ppgd_test);
                modal.find('.modal-body #n_sar_test').val(n_sar_test);
                modal.find('.modal-body #n_impk_test').val(n_impk_test);
                modal.find('.modal-body #n_repling_test').val(n_repling_test);
                modal.find('.modal-body #n_sebrang_kering_test').val(n_sebrang_kering_test);
                modal.find('.modal-body #minat_test').val(minat_test);
                modal.find('.modal-body #divisi_test').val(divisi_test);
                 
            });
            </script>
            <script>
                    $(function () {
                      $('#example1').DataTable()
                      $('#example2').DataTable({
                        'paging'      : true,
                        'lengthChange': false,
                        'searching'   : false,
                        'ordering'    : true,
                        'info'        : true,
                        'autoWidth'   : false
                      })
                    })
                  </script>
</body>

</html>
<!-- end document-->
