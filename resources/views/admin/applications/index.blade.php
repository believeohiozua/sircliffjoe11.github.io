@extends('layouts.admin-master')

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-cubes'])
    @include('admin.partials.flash')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            @foreach ($applications as $application)
            <div class="col-md-4">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header text-white" style="background: url('{{ asset('backend/dist/img/photo1.png') }}') center center;">
                        <h3 class="widget-user-username text-right">Status: {{ $application->status }}</h3>
                        <h5 class="widget-user-desc text-right">{{ $application->gender }}</h5>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Name:</strong>
                            <span class="text-muted">{{ $application->name }}</span>            
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Description:</strong>
                            <span class="text-muted">{{ $application->about }}</span>            
                            <hr>
                            <strong><i class="fas fa-phone mr-1"></i> Mobile Number:</strong>
                            <span class="text-muted">{{ $application->mobile }}</span>            
                            <hr>
                            <strong><i class="fas fa-inbox mr-1"></i> Email Address:</strong>
                            <span class="text-muted">{{ $application->email }}</span>            
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location:</strong>
                            <span class="text-muted">{{ $application->city.', '.$application->state.'.' }}</span>
                            <hr>
                            <strong><i class="fas fa-user mr-1"></i> Referrerd By:</strong>
                            <span class="text-muted">{{ $application->source }}</span>
                            <hr> 
                            <form action="{{ route('admin.applications.approve') }}" method="POST"> @csrf
                                <strong><i class="fas fa fa-cubes mr-1"></i> Requested Package:</strong>
                                <select name="credit_limit" id="package" name="package" class="form-control" required>
                                    <option value="">-- Please Select --</option>
                                    @foreach($application->productOptions() as $key => $value)
                                        <option value="{{ $key }}" {{ $key == $application->package ? 'selected' : '' }}> 
                                            {{ $value }} 
                                        </option>
                                    @endforeach
                                </select>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6 border-right">
                                        <a href="{{ route('admin.applications.dismiss', $application->id) }}" class="btn btn-danger btn-block btn-sm">Dismiss</a>
                                    </div>                                    
                                    <input type="hidden" name="id" value="{{ $application->id }}">
                                    <input type="hidden" name="first_name" value="{{ $application->first_name }}">
                                    <input type="hidden" name="last_name" value="{{ $application->last_name }}">
                                    <input type="hidden" name="email" value="{{ $application->email }}">
                                    <input type="hidden" name="mobile" value="{{ $application->mobile }}">
                                    <input type="hidden" name="gender" value="{{ $application->getOriginal('gender') }}">
                                    <div class="col-sm-6">
                                        <button type="submit" href="#" class="btn btn-success btn-block btn-sm text-white">Approve</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle" src="{{ asset('backend/img/'.$application->gender.'.png') }}" alt="User Avatar">
                    </div>
                </div>
            </div>                
            @endforeach
        </div>
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