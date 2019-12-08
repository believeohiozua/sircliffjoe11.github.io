@extends('layouts.admin-master')

@section('title') 

@section('content')

    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-users'])

    @include('admin.partials.flash')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="tile-body">
                            @include('admin.users.form')
                        </div>
                        
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>{{ __('Save User') }}</button>
                            &nbsp;&nbsp;&nbsp;
                            <a class="btn btn-secondary" href="{{ route('admin.users.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    </section>
@endsection