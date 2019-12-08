<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('storage/'.config('settings.site_logo')) }}" alt="{{ config('settings.site_admin') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ config('settings.site_admin') }}</span>
            </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::guard('admin')->user()->firstMedia('avatar'))
                    <img src="{{ asset('storage/'.Auth::guard('admin')->user()->firstMedia('avatar')->getDiskPath()) }}" class="img-circle elevation-2" alt="User Image">
                @else         
                    <img src="{{ asset('backend/img/cm-logo.png') }}" class="img-circle elevation-2" alt="{{ config('settings.site_admin') }}">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        {{ __('Dashboard') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.admins.show') }}" class="nav-link {{ Route::currentRouteName() == 'admin.admins.show' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                        {{ __('Profile') }}
                        </p>
                    </a>
                </li> 
                @can('levelOne')
                    <li class="nav-item">
                        <a href="{{ route('admin.admins.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.admins.index' ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user-secret"></i>
                            <p>
                            {{ __('Admins') }}
                            </p>
                        </a>
                    </li>                    
                @endcan
                <li class="nav-item">
                    <a href="{{ route('admin.applications.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.applications.index' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                        {{ __('Applications') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.users.index' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                        {{ __('Users') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                        {{ __('Products') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.orders.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.orders.index' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-question-circle"></i>
                        <p>
                        {{ __('Orders') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.packages.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.packages.index' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-cubes"></i>
                        <p>
                        {{ __('Packages') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.slots.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.slots.index' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-random"></i>
                        <p>
                        {{ __('Positions') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.payments.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.payments.index' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p>
                        {{ __('Payments') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.payouts.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.payouts.index' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-heart"></i>
                        <p>
                        {{ __('Payouts') }}
                        </p>
                    </a>
                </li>
                
                @can('levelOne')
                <li class="nav-item">
                    <a href="{{ url('/telescope') }}" target="_blank" class="nav-link">
                        <i class="nav-icon fa fa-eye"></i>
                        <p>
                        {{ __('Telescope') }}
                        </p>
                    </a>
                </li> 
                <li class="nav-item">
                    <a href="{{ route('admin.settings') }}" class="nav-link {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-cogs"></i>
                        <p>
                        {{ __('Settings') }}
                        </p>
                    </a>
                </li>                   
                @endcan
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon fa fa-power-off"></i>
                        <p>
                        {{ __('Logout') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>