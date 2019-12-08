    
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

                        @case('admin.subscribers.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Subscribers</a></li>                            
                          @break


                        @case('admin.categories.index')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a>Categories</a></li>                            
                          @break
                        @case('admin.categories.create')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
                          <li class="breadcrumb-item"><a>Create</a></li>                            
                          @break
                        @case('admin.categories.edit')
                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
                          <li class="breadcrumb-item"><a>Edit</a></li>                            
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