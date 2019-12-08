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
                                <label class="control-label" for="sms_gateway">BulkSMSNigeria.com</label>
                                <select name="sms_gateway" id="sms_gateway" class="form-control">
                                    <option value="1" {{ (config('settings.sms_gateway')) == 1 ? 'selected' : '' }}>Enabled</option>
                                    <option value="0" {{ (config('settings.sms_gateway')) == 0 ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="sms_token">SMS Token</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="SMS API Token"
                                    id="sms_token"
                                    name="sms_token"
                                    value="{{ config('settings.sms_token') }}"
                                />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="sms_sender">Sender ID</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Sender ID"
                                    id="sms_sender"
                                    name="sms_sender"
                                    value="{{ config('settings.sms_sender') }}"
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