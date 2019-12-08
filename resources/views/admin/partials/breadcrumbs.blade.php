    
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark"><i class="{{ $icon }}"></i> {{ $pageTitle }}</h1>
                  <p>{{ $subTitle }}</p>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    @switch(Route::currentRouteName())
                        @case('admin.admins.show')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Profile</a></li>                             
                          @break


                        @case('admin.admins.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Admins</a></li>                            
                          @break
                        @case('admin.admins.create')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.admins.index') }}">Admins</a></li>
                          <li class="breadcrumb-item"><a>Create</a></li>                            
                          @break
                        @case('admin.admins.edit')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.admins.index') }}">Admins</a></li>
                          <li class="breadcrumb-item"><a>Edit</a></li>                            
                          @break


                        @case('admin.applications.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Applications</a></li>                            
                          @break


                        @case('admin.users.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Users</a></li>                            
                          @break
                        @case('admin.users.create')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
                          <li class="breadcrumb-item"><a>Create</a></li>                            
                          @break
                        @case('admin.users.edit')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
                          <li class="breadcrumb-item"><a>Edit</a></li>                            
                          @break


                        @case('admin.products.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Products</a></li>                            
                          @break
                        @case('admin.products.create')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
                          <li class="breadcrumb-item"><a>Create</a></li>                            
                          @break
                        @case('admin.products.edit')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
                          <li class="breadcrumb-item"><a>Edit</a></li>                            
                          @break


                        @case('admin.orders.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Orders</a></li>                            
                          @break
                        @case('admin.orders.create')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Orders</a></li>
                          <li class="breadcrumb-item"><a>Create</a></li>                            
                          @break
                        @case('admin.orders.edit')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Orders</a></li>
                          <li class="breadcrumb-item"><a>Edit</a></li>                            
                          @break


                        @case('admin.packages.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Packages</a></li>                            
                          @break
                        @case('admin.packages.create')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.packages.index') }}">Packages</a></li>
                          <li class="breadcrumb-item"><a>Create</a></li>                            
                          @break
                        @case('admin.packages.edit')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.packages.index') }}">Packages</a></li>
                          <li class="breadcrumb-item"><a>Edit</a></li>                            
                          @break


                        @case('admin.slots.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Positions</a></li>                            
                          @break


                        @case('admin.payments.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Payments</a></li>                            
                          @break


                        @case('admin.payouts.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Payouts</a></li>                            
                          @break


                        @case('admin.settings')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Settings</a></li>                            
                          @break

                          
                        @default
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>                            
                    @endswitch
                  </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->