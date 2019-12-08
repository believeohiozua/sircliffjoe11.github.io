@extends('layouts.admin-master')

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-question-circle'])
    @include('admin.partials.flash')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                    {{-- <a href="{{ route('admin.orders.create') }}" class="btn btn-primary mb-2">Add Package</a> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Order ID</th>
                                <th >Member Name</th>
                                <th >Product</th>
                                <th >Slots</th>
                                <th class="text-center">Status</th>
                                <th >Edit</th>
                                <th >Approve</th>
                                <th >Deny</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($orders as $key => $order)
                                <tr> 
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->product->name }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td class="project_progress"><a>{{ $order->status }}</a></td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-block btn-warning btn-sm {{ $order->status != 0 ? 'disabled' : '' }}" href="{{ route('admin.orders.edit', $order->id) }}">
                                            <i class="fas fa-pencil-alt"></i> Edit
                                        </a>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-block btn-success btn-sm {{ $order->status != 0 ? 'disabled' : '' }}" href="{{ route('admin.orders.approve', $order->id) }}">
                                            <i class="fa fa-check-square"></i> Approve
                                        </a>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-block btn-danger btn-sm {{ $order->status != 0 ? 'disabled' : '' }}" href="{{ route('admin.orders.delete', $order->id) }}">
                                            <i class="fas fa-trash"></i> Deny
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