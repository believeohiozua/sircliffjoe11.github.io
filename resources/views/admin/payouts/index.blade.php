@extends('layouts.admin-master')

@section('content')
    {{-- @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-heart']) --}}
    @include('admin.partials.flash')

    <!-- Main content -->
    @include('admin.payouts.includes.invoice')
@endsection

@push('scripts')
  <!-- DataTables -->
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function () {
            $("#sampleTable").DataTable();
        });
    </script>
@endpush