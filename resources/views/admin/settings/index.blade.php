@extends('layouts.admin-master')

@section('content')
    @include('admin.partials.breadcrumbs', [ 'icon' => 'fa fa-cogs'])
    @include('admin.partials.flash')

    <div class="card-body">

        <div class="card card-primary card-outline">
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#general" role="tab" aria-controls="custom-content-below-home" aria-selected="true">                       
                    <i class="fa fa-cog nav-icon"></i>
                    {{ __('General') }}
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#site-logo" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">                       
                    <i class="fa fa-cog nav-icon"></i>
                    {{ __('Site Logo') }}
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#footer-seo" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">                       
                    <i class="fa fa-cog nav-icon"></i>
                    {{ __('Footer & SEO') }}
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#social-links" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">                       
                    <i class="fa fa-cog nav-icon"></i>
                    {{ __('Social Links') }}
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#analytics" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">                       
                    <i class="fa fa-cog nav-icon"></i>
                    {{ __('Analytics') }}
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#payments" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">                       
                    <i class="fa fa-cog nav-icon"></i>
                    </i> {{ __('Payments') }}
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#gateways" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">                       
                    <i class="fa fa-cog nav-icon"></i>
                    </i> {{ __('SMS Gateways') }}
                </a>
              </li>

            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">

              <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                    @include('admin.settings.includes.general') 
              </div>

              <div class="tab-pane fade" id="site-logo" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                    @include('admin.settings.includes.logo')
              </div>

              <div class="tab-pane fade" id="footer-seo" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                    @include('admin.settings.includes.footer_seo')
              </div>

              <div class="tab-pane fade" id="social-links" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                    @include('admin.settings.includes.social_links')
              </div>

              <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                    @include('admin.settings.includes.analytics')
              </div>

              <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                    @include('admin.settings.includes.payments')
              </div>

              <div class="tab-pane fade" id="gateways" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                    @include('admin.settings.includes.sms-gateways')
              </div>

            </div>
          </div>
          <!-- /.card -->
        </div>
    </div>
@endsection