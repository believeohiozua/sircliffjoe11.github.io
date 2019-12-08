@extends('layouts.admin-master')

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-cubes'])
    @include('admin.partials.flash')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                    {{-- <a href="{{ route('admin.packages.create') }}" class="btn btn-primary mb-2">Add Package</a> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th >Name</th>
                                <th >Product</th>
                                <th >Booked Slots</th>
                                <th >Status</th>
                                <th >Launched</th>
                                <th >Next Payment</th>
                                <th >Due Date</th>
                                {{-- <th ></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($packages as $package)
                                <tr> 
                                    <td>{{ $package->id }}</td>
                                    <td>{{ $package->name }}</td>
                                    <td>{{ $package->product->name }}</td>
                                    <td>{{ $package->bookedSlots()->count().'/'.$package->slots->count() }}</td>
                                    <td>{{ $package->status }}</td>
                                    <td>{{ $package->start_at ? $package->start_at->diffForHumans() : 'Not Ready' }}</td>
                                    <td>
                                        {{ $package->payments->count()  > 0 ? $package->payment()->name : 'Not Ready' }}
                                    </td>
                                    <td>
                                        {{ $package->payments->count()  > 0  ? $package->payment()->due_at->diffForHumans() : 'Not Ready' }}
                                    </td> 
                                    {{-- <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('admin.packages.edit', $package->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.packages.delete', $package->id) }}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td> --}}
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