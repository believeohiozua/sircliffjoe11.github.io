@extends('layouts.admin-master') 

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-user'])
    @include('admin.partials.flash')


    <section class="content">
      <div class="container-fluid">
        
      <form action="{{ route('admin.admins.update') }}" method="POST" class="form-horizontal" enctype="multipart/form-data"> @csrf
        <div class="row">
          <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
              @if ( $admin->hasMedia('avatar') )
                  <img src="{{ asset('storage/'.$admin->firstMedia('avatar')->getDiskPath()) }}" id="avatar" class="profile-user-img img-fluid img-circle" alt="img">
              @else
                  <img src="{{ asset('backend/img/tbc-admin-black.png') }}" id="avatar" class="profile-user-img img-fluid img-circle" alt="img">
              @endif
                </div>  
                <h3 class="profile-username text-center">{{ $admin->name }}</h3>  
                <p class="text-muted text-center">{{ $admin->title }}</p>    
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-10">
                            <input class="form-control @error('avatar') is-invalid @enderror" type="file" id="avatar" name="avatar"/>
                            @error('avatar') {{ $message }} @enderror
                        </div>
                    </div>
                </div>  
                <button type="submit" class="btn btn-sm btn-success btn-block"><b>Update Avatar</b></button>
              </div>
            </div>
          </div>


          <div class="col-md-9">
            <div class="card">
              {{-- <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div> --}}

              <div class="card-body">
                <div class="tab-content">  
                  <div class="tab-pane active" id="settings">

                    <div class="form-group">
                      <label class="control-label" for="name">{{ __('Full Name') }}<span class="m-l-5 text-danger"> *</span></label>
                      <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $admin->name }}"/>
                      <input type="hidden" name="id" value="{{ $admin->id }}">
                      <input type="hidden" name="access" value="{{ $admin->getOriginal('access') }}">
                      @error('name') {{ $message }} @enderror
                    </div>
                              
                    <div class="form-group">
                        <label class="control-label" for="email">{{ __('Email') }}<span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ $admin->email }}"/>
                        @error('email') {{ $message }} @enderror
                    </div>                        
                        
                    <div class="form-group">
                      <label class="control-label" for="password">{{ __('Password') }} <small>(Leave it blank if you don't want to change your password)</small></label>
                      <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" id="password" value="{{ old('password') }}"/>
                      @error('password') {{ $message }} @enderror
                    </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Update Credentials</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
          </div>
        </div>
      </form>
      </div><!-- /.container-fluid -->
    </section>


  @endsection