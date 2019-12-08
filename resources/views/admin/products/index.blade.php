@extends('layouts.admin-master')

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-shopping-cart'])
    @include('admin.partials.flash')

    <!-- Main content -->
    <section class="content"> 
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-2 float-right">Add New Osusu Product</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 30%">Name</th>
                                <th style="width: 30%">Code</th>
                                <th style="width: 30%">Slots</th>
                                <th style="width: 8%">Amount</th>
                                <th style="width: 30%">Payout</th>
                                <th style="width: 30%">Overdue</th>
                                <th style="width: 30%">Service</th>
                                <th style="width: 30%">Due Days</th>
                                <th style="width: 30%">Pay Days</th>
                                <th style="width: 30%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr> 
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->slots }}</td>
                                    <td><a>{{ $product->amount }}</a></td>
                                    <td>{{ $product->payout }}</td>
                                    <td>N{{ $product->calculateOverdue() }}</td>
                                    <td>N{{ $product->calculateCommission() }}</td>
                                    <td>{{ $product->due_day }}</td>
                                    <td>{{ $product->pay_day }}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('admin.products.edit', $product->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.products.delete', $product->id) }}">
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