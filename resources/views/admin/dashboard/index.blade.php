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
        <div class="small-box bg-info">
          <div class="inner"> 
            <h3>{{ $totalApplications }}</h3> <p>Applicants</p>
          </div>
          <div class="icon"> <i class="fa fa-user-plus"></i> </div>
          <a href="{{ route('admin.applications.index') }}" class="small-box-footer">
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

    <div class="row">

      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner"> 
            <h3>{{ $totalProducts }}</h3> <p>Total Products</p>
          </div>
          <div class="icon"> <i class="fa fa-shopping-cart"></i> </div>
          <a href="{{ route('admin.products.index') }}" class="small-box-footer">
            View More <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner"> 
            <h3>{{ count( $totalPackages ).'/'.$activePackages }}</h3> <p>Active/Total Packages</p>
          </div>
          <div class="icon"> <i class="fa fa fa-cubes"></i> </div>
          <a href="{{ route('admin.packages.index') }}" class="small-box-footer">
            View More <i class="fas fa-question-circle"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner"> 
            <h3>{{ count( $pendingPayments ) }}</h3> <p>Pending Payments</p>
          </div>
          <div class="icon"> <i class="fa fa-credit-card"></i> </div>
          <a href="{{ route('admin.payments.index') }}" class="small-box-footer">
            View More <i class="fas fa-question-circle"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner"> 
            <h3>{{ count( $pendingPayouts ) }}</h3> <p>Pending Payouts</p>
          </div>
          <div class="icon"> <i class="fa fa-heart"></i> </div>
          <a href="{{ route('admin.payouts.index') }}" class="small-box-footer">
            View More <i class="fas fa-question-circle"></i>
          </a>
        </div>
      </div>

    </div>


  </div>
</section>
@endsection