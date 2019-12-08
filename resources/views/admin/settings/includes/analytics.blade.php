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
                                <label class="control-label" for="google_analytics">Google Analytics Code</label>
                                <textarea
                                    class="form-control"
                                    rows="4"
                                    placeholder="Enter google analytics code"
                                    id="google_analytics"
                                    name="google_analytics"
                                >{!! Config::get('settings.google_analytics') !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="facebook_pixels">Facebook Pixel Code</label>
                                <textarea
                                    class="form-control"
                                    rows="4"
                                    placeholder="Enter facebook pixel code"
                                    id="facebook_pixels"
                                    name="facebook_pixels"
                                >{{ Config::get('settings.facebook_pixels') }}</textarea>
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