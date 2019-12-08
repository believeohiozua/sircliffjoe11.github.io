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
                                <label class="control-label" for="default_payment_method">Bank Deposit Method</label>
                                <select name="default_payment_method" id="default_payment_method" class="form-control" disabled>
                                    <option value="1" {{ (config('settings.default_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                                    <option value="0" {{ (config('settings.default_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>                           
                            <div class="form-group">
                                <label class="control-label" for="default_bank_name">Bank Name</label>
                                <select name="default_bank_name" id="default_bank_name" class="form-control">
                                    @foreach ($setting->bankOptions() as $value)
                                        <option value="{{ $value }}" {{ config('settings.default_bank_name') == $value ? 'selected' : '' }}> {{ $value }} 
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="default_account_name">Account Name</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter Account Name"
                                    id="default_account_name"
                                    name="default_account_name"
                                    value="{{ config('settings.default_account_name') }}"
                                />
                            </div>
                            <div class="form-group pb-2">
                                <label class="control-label" for="default_account_number">Account Number</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter default_account_number"
                                    id="default_account_number"
                                    name="default_account_number"
                                    value="{{ config('settings.default_account_number') }}"
                                    minlength="10"
                                    maxlength="10"
                                />
                            </div>                           
                            <div class="form-group">
                                <label class="control-label" for="default_account_type">Account Type</label>
                                <select name="default_account_type" id="default_account_type" class="form-control">
                                    @foreach ($setting->accountTypeOptions() as $value)
                                        <option value="{{ $value }}" {{ config('settings.default_account_type') == $value ? 'selected' : '' }}> {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr> <hr>

                            <div class="form-group">
                                <label class="control-label" for="stripe_payment_method">Stripe Payment Method</label>
                                <select name="stripe_payment_method" id="stripe_payment_method" class="form-control" disabled>
                                    <option value="1" {{ (config('settings.stripe_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                                    <option value="0" {{ (config('settings.stripe_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="stripe_key">Key</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter stripe key"
                                    id="stripe_key"
                                    name="stripe_key"
                                    value="{{ config('settings.stripe_key') }}"
                                    disabled
                                />
                            </div>
                            <div class="form-group pb-2">
                                <label class="control-label" for="stripe_secret_key">Secret Key</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter stripe secret key"
                                    id="stripe_secret_key"
                                    name="stripe_secret_key"
                                    value="{{ config('settings.stripe_secret_key') }}"
                                    disabled
                                />
                            </div>

                            <hr>

                            <div class="form-group pt-2">
                                <label class="control-label" for="paypal_payment_method">PayPal Payment Method</label>
                                <select name="paypal_payment_method" id="paypal_payment_method" class="form-control" disabled>
                                    <option value="1" {{ (config('settings.paypal_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                                    <option value="0" {{ (config('settings.paypal_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="paypal_client_id">Client ID</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter paypal client Id"
                                    id="paypal_client_id"
                                    name="paypal_client_id"
                                    value="{{ config('settings.paypal_client_id') }}"
                                    disabled
                                />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="paypal_secret_id">Secret ID</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter paypal secret id"
                                    id="paypal_secret_id"
                                    name="paypal_secret_id"
                                    value="{{ config('settings.paypal_secret_id') }}"
                                    disabled
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