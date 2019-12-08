@extends('layouts.admin-master')
@section('styles')
    <style>
        .option_red {
            background-color: #cc0000; 
            font-weight: bold; 
            font-size: 12px; 
            color: white;
        }
    </style>
@endsection

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-random'])
    @include('admin.partials.flash')

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Packages</h3>
              </div>
              <div class="card-body">
                <div id="accordion">
                    @foreach ($packages as $package)
                        <div class="card card-primary">
                            <div class="card-header" data-toggle="collapse"  href="#{{ $package->name }}">
                                <h4 class="card-title">
                                    <a>{{ $package->name }}</a>
                                </h4>
                            </div>
                            <div id="{{ $package->name }}" data-parent="#accordion" class="panel-collapse collapse in">
                                <div class="card-body table-responsive">
                                    <table class="table table-hover table-bordered table-xs text-center" id="sampleTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th >Position</th>
                                                <th >Default Owner</th>
                                                <th >New Owner</th>
                                                <th >Received</th>
                                                {{-- <th >Status</th>
                                                <th >Due Date</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($package->slots as $key => $slot)
                                                <tr> 
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $slot->name }}</td>
                                                    <td>{{ $slot->user->name ?? 'vacant' }}</td>
                                                    <td>
                                                        <select class="form-control custom-select mt-15 select" name="" id="" {{ !is_null($slot->received_at) ? 'disabled' : '' }}>
                                                            @foreach ($package->unpaidUsers() as $user)
                                                                @if ($slot->user)
                                                                <option
                                                                    value="{{ $user->id }}"
                                                                    {{ $slot->user->id == $user->id ? 'selected' : '' }}
                                                                    >
                                                                    {{ $user->name }}
                                                                </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>{{ !is_null($slot->received_at) ? $slot->received_at->diffForHumans() : 'Not Paid' }}</td>
                                                    {{-- <td>{{ $slot->status }}</td>
                                                    <td>{{ $slot->due_at->diffForHumans() }}</td> --}}
                                                </tr> 
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
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
        
        $('select.select').change(function(){
            $(this).addClass('is-invalid');
        });
    </script>
@endpush