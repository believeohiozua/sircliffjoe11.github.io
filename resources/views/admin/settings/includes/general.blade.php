<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- form start -->
                <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label" for="site_name">Site Name</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter site name"
                                id="site_name"
                                name="site_name"
                                value="{{ config('settings.site_name') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="site_title">Site Title</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter site title"
                                id="site_title"
                                name="site_title"
                                value="{{ config('settings.site_title') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="domain_name">Domain Name</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter domain name"
                                id="domain_name"
                                name="domain_name"
                                value="{{ config('settings.domain_name') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="default_email_address">Default Email Address</label>
                            <input
                                class="form-control"
                                type="email"
                                placeholder="Enter store default email address"
                                id="default_email_address"
                                name="default_email_address"
                                value="{{ config('settings.default_email_address') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="currency_code">Currency Code</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter store currency code"
                                id="currency_code"
                                name="currency_code"
                                value="{{ config('settings.currency_code') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="currency_symbol">Currency Symbol</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter store currency symbol"
                                id="currency_symbol"
                                name="currency_symbol"
                                value="{{ config('settings.currency_symbol') }}"
                            />
                        </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
</section>