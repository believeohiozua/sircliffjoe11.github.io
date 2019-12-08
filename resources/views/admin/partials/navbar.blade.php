<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            @if (Auth::guard('admin')->user()->firstMedia('avatar'))
                <img src="{{ asset('storage/'.Auth::guard('admin')->user()->firstMedia('avatar')->getDiskPath()) }}" class="user-image img-circle elevation-2" alt="User Image">
            @else         
                <img src="{{ asset('backend/img/cm-logo.png') }}" class="user-image img-circle elevation-2" alt="TBC Admin">
            @endif
            <span class="d-none d-md-inline">{{ Auth::guard('admin')->user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
                @if (Auth::guard('admin')->user()->firstMedia('avatar'))
                    <img src="{{ asset('storage/'.Auth::guard('admin')->user()->firstMedia('avatar')->getDiskPath()) }}" class="user-image img-circle elevation-2" alt="User Image">
                @else         
                    <img src="{{ asset('backend/img/cm-logo.png') }}" class="user-image img-circle elevation-2" alt="TBC Admin">
                @endif
            <p>
                {{ Auth::guard('admin')->user()->name }}
                <small>Admin since {{ Auth::guard('admin')->user()->created_at->diffForHumans() }}</small>
            </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
            <a href="{{ route('admin.admins.show') }}" class="btn btn-default btn-flat">Profile</a>
            <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat float-right">{{ trans('Logout') }}</a>
            </li>
        </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->