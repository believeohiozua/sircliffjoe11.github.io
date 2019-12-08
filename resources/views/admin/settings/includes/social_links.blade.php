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
                                <label class="control-label" for="social_facebook">Facebook Profile</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter facebook profile link"
                                    id="social_facebook"
                                    name="social_facebook"
                                    value="{{ config('settings.social_facebook') }}"
                                />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="social_twitter">Twitter Profile</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter twitter profile link"
                                    id="social_twitter"
                                    name="social_twitter"
                                    value="{{ config('settings.social_twitter') }}"
                                />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="social_instagram">Instagram Profile</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter instagram profile link"
                                    id="social_instagram"
                                    name="social_instagram"
                                    value="{{ config('settings.social_instagram') }}"
                                />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="social_linkedin">LinkedIn Profile</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter linkedin profile link"
                                    id="social_linkedin"
                                    name="social_linkedin"
                                    value="{{ config('settings.social_linkedin') }}"
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