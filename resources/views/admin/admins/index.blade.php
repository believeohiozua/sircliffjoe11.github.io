@extends('layouts.admin-master') 

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-user-secret'])
    @include('admin.partials.flash')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                        <a href="{{ url('/telescope') }}" target="_blank" class="btn btn-primary mb-2">Goto Telescope</a>
                <a href="{{ route('admin.admins.create') }}" class="btn btn-primary float-right mb-2">Add Admin</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Access Level </th>
                                <th> Avatar </th>
                                <th 
                                    style="width:100px; min-width:100px;" 
                                    class="text-center text-danger">
                                    <i class="fa fa-bolt"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->access }}</td>
                                    <td>{{ $admin->firstMedia('avatar')  ? 'Yes' : 'No'}}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('admin.admins.delete', $admin->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
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