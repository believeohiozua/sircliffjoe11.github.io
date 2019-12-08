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
                                <label class="control-label" for="footer_copyright_text">Footer Copyright Text</label>
                                <textarea
                                    class="form-control"
                                    rows="4"
                                    placeholder="Enter footer copyright text"
                                    id="footer_copyright_text"
                                    name="footer_copyright_text"
                                >{{ config('settings.footer_copyright_text') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="seo_meta_title">SEO Meta Title</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Enter seo meta title for store"
                                    id="seo_meta_title"
                                    name="seo_meta_title"
                                    value="{{ config('settings.seo_meta_title') }}"
                                />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="seo_meta_description">SEO Meta Description</label>
                                <textarea
                                    class="form-control"
                                    rows="4"
                                    placeholder="Enter seo meta description for store"
                                    id="seo_meta_description"
                                    name="seo_meta_description"
                                >{{ config('settings.seo_meta_description') }}</textarea>
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