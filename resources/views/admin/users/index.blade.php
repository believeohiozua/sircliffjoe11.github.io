@extends('layouts.admin-master')

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-users'])
    @include('admin.partials.flash')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card-header ">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-2 float-right">Create New User</a>
                    <a href="{{ route('admin.users.resend') }}" class="btn btn-default mb-2">Resend Welcome SMS</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 10%">Avatar</th>
                                <th style="width: 30%">Name</th>
                                <th>Username</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th style="width: 8%" class="text-center">Type</th>
                                <th style="width: 8%" class="text-center">Score</th>
                                <th style="width: 30%">Limit</th>
                                <th style="width: 30%">Reset</th>
                                <th style="width: 30%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr> 
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->firstMedia('avatar') ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a>
                                    </td>
                                    <td class="project_progress"><a>{{ $user->username }}</a></td>
                                    <td class="project_progress"><a>{{ $user->mobile }}</a></td>
                                    <td class="project_progress"><a>{{ $user->email }}</a></td>
                                    <td class="project-state">
                                        <span class="badge badge-success">{{ $user->type }}</span>
                                    </td>
                                    <td class="project_progress"><a>{{ $user->credit_score }}</a></td>
                                    <td class="project_progress"><a>{{ formatAmount($user->credit_limit) }}</a></td>
                                    <td class="project_progress">
                                        <a href="{{ route('admin.users.reset', $user->id) }}" class="btn btn-sm btn-block btn-primary mb-2">Reset</a></td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('admin.users.edit', $user->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.users.delete', $user->id) }}">
                                            <i class="fas fa-trash"></i>
                                        </a>
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