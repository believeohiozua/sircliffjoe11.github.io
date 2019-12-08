<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('settings.site_admin').' | '.$pageTitle)</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  </head>
  <body class="hold-transition" onload="window.print();">

    <div class="wrapper">
        @include('admin.payouts.includes.invoice')
    </div>
  </body>
</html>
