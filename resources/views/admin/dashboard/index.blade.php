@extends('layouts.admin-master')

@section('content')
  @include('admin.partials.breadcrumbs', [ 'icon' => 'fas fa-tachometer-alt'])
  @include('admin.partials.flash')

<!-- Main Content Here -->
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner"> 
            <h3>{{ $totalAdmins }}</h3> <p>Admins</p>
          </div>
          <div class="icon"> <i class="fa fa-user-secret"></i> </div>
          <a href="{{ route('admin.admins.index') }}" class="small-box-footer">
            View More <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner"> 
            <h3>{{ $totalUsers }}</h3> <p>Registered Members</p>
          </div>
          <div class="icon"> <i class="fa fa-user"></i> </div>
          <a href="{{ route('admin.users.index') }}" class="small-box-footer">
            View More <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>


  </div>
</section>
@endsection