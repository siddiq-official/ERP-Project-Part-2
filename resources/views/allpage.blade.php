<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arch 360 ERP</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/frontend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('public/frontend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/frontend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('public/frontend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/frontend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/frontend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/frontend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('public/frontend/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{ url('dashbord') }}"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('dashbord') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('contacts') }}" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>-->
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> 
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="{{ url('contacts') }}">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashbord" class="brand-link">
      <img src="{{ asset('public/img/arch360logo.png') }}" alt="360 Logo" class="brand-image img-squre elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Arch 360 ERP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/img/avatar1.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('profile') }}" class="d-block">Ahmmed Imtiaj Shahriar</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <!-- For Admin -->
          <!-- <li class="nav-item has-treeview">
            <a href="{{ url('contacts') }}" class="nav-link">
              <i class="nav-icon fas fa-user-shield"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="{{ url('updates') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Updates</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('project_statous') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project status</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- /For Admin -->


          <!-- For HR -->
          <li class="nav-item has-treeview">
            <a href="{{ url('contacts') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                HR
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('employe_status') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employe List</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('add_employe') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Employe</p>
                </a>
              </li>
            </ul>
            
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('contacts') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employe history</p>
                </a>
              </li>
            </ul> -->
          </li>
          <!-- /For HR -->


          <!-- For Account -->
          <li class="nav-item has-treeview">
            <a href="{{ url('contacts') }}" class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Account
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('bill') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bill</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('invoice') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('money_receipt') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Money Receipt</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('transaction') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaction</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('general_expenses') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Expence</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /For Account -->


          <!-- For Attendence -->
          <li class="nav-item has-treeview">
            <a href="{{ url('contacts') }}" class="nav-link">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Attendence
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('contacts') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendence Status</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('contacts') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Take Attendence</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /For Attendence -->


          <!-- For Payroll -->
          <li class="nav-item has-treeview">
            <a href="{{ url('contacts') }}" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Payroll
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('contacts') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salary Structure</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('contacts') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee salary List</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('contacts') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Set Salary Structure</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /For Payroll -->


          <!-- For Stoke -->
          <li class="nav-item has-treeview">
            <a href="{{ url('contacts') }}" class="nav-link">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>
                Stoke
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('merchant_list') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merchant List</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('addmerchant') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Merchant</p>
                </a>
              </li>
           
              <li class="nav-item">
                <a href="{{ url('stock_sheet') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Sheet</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('purchase') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase</p>
                </a>
              </li>
            </ul>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('contacts') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase List</p>
                </a>
              </li>
            </ul> -->
          </li>
          <!-- /For Stoke -->


          <!-- For Projects -->
          <li class="nav-item has-treeview">
            <a href="{{ url('contacts') }}" class="nav-link">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              
              
              <li class="nav-item">
                <a href="{{ url('add_project') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Project</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('project_list') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects List</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /For Projects -->


          <!-- For CRM -->
          <li class="nav-item has-treeview">
            <a href="{{ url('contacts') }}" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                CRM
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('add_client') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Client</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('client_list') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client Profile list</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('edit_Client_info') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client Info update</p>
                </a>
              </li>
            </ul>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('client_document_upload') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client Document upload</p>
                </a>
              </li>
            </ul> -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('payment') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- /For CRM -->

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>








  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    @yield('content')
    @yield('contentinput')
    

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
        <footer class="main-footer">
          <strong>Copyright &copy; 2021 <a href="{{ url('dashbord') }}">BD 360 ERP Ltd.</a>.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.0
          </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="{{ asset('public/frontend/plugins/jquery/jquery.min.js') }}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{ asset('public/frontend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{ asset('public/frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- ChartJS -->
      <script src="{{ asset('public/frontend/plugins/chart.js/Chart.min.js') }}"></script>
      <!-- Sparkline -->
      <script src="{{ asset('public/frontend/plugins/sparklines/sparkline.js') }}"></script>
      <!-- JQVMap -->
      <script src="{{ asset('public/frontend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
      <script src="{{ asset('public/frontend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{ asset('public/frontend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
      <!-- daterangepicker -->
      <script src="{{ asset('public/frontend/plugins/moment/moment.min.js') }}"></script>
      <script src="{{ asset('public/frontend/plugins/daterangepicker/daterangepicker.js') }}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{ asset('public/frontend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
      <!-- Summernote -->
      <script src="{{ asset('public/frontend/plugins/summernote/summernote-bs4.min.js') }}"></script>
      <!-- overlayScrollbars -->
      <script src="{{ asset('public/frontend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('public/frontend/dist/js/adminlte.js') }}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{ asset('public/frontend/dist/js/pages/dashboard.js') }}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ asset('public/frontend/dist/js/demo.js') }}"></script>
      <!-- DataTables -->
      <script src="{{ asset('public/frontend/plugins/datatables/jquery.dataTables.js') }}"></script>
      <script src="{{ asset('public/frontend/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
      <!-- page script -->
      <script>
        $(function () {
          $(".DataTable").DataTable();
          /*$('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
          });*/
        });
      </script>
  </body>
</html>
