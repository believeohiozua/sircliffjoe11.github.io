@extends('layouts.admin-master')

@section('title') 

@section('content')

    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-question-circle'])

    @include('admin.partials.flash')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="tile-body">
                            @include('admin.orders.form')
                        </div>
                        
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>{{ __('Update Order') }}</button>
                            &nbsp;&nbsp;&nbsp;
                            <a class="btn btn-secondary" href="{{ route('admin.orders.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    </section>
@endsection