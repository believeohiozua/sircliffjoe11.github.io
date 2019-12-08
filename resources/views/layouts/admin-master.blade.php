<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @if(Session::has('download.in.the.next.request'))
        <meta http-equiv="refresh" content="5;url={{ Session::get('download.in.the.next.request') }}">
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ 'storage/'.config('settings.site_favicon') }}">

    <title>@yield('title', config('settings.site_admin').' | '.$pageTitle)</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    @yield('styles')
  </head>
  <body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('admin.partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
      @include('admin.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        @yield('content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
      @include('admin.partials.control-sidebar')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.partials.footer')

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>  
  @stack('scripts')
  </body>
</html>
