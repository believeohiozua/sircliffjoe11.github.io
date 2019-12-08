@extends('layouts.admin-master')

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-credit-card'])
    @include('admin.partials.flash')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                    {{-- <a href="{{ route('admin.payments.create') }}" class="btn btn-primary mb-2">Add Payment</a> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th >Member</th>
                                <th >View</th>
                                <th >Amount</th>
                                <th >Status</th>
                                <th >Due Date</th>
                                <th ></th>
                                <th ></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $key => $payment)
                                <tr> 
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $payment->user->name }}</td>
                                    @if ( $payment->getOriginal('status') == 1 )
                                        <td><a href="" data-toggle="modal" data-target="#submit{{ $payment->id }}">Details</a></td>
                                    @else
                                        <td>Details</td>
                                    @endif
                                    <td>{{ $payment->payTotal() }}</td>
                                    <td>{{ $payment->status }}</td>
                                    <td>{{ $payment->due_at->diffForHumans() }}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-danger btn-block btn-sm" href="{{ route('admin.payments.reject', $payment->id) }}">
                                            Reject
                                        </a>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-success btn-block btn-sm" href="{{ route('admin.payments.approve', $payment->id) }}">
                                            Confirm
                                        </a>
                                    </td>
                                </tr>
                                @include('admin.payments.includes.proof')
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