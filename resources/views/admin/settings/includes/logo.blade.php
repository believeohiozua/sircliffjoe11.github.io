<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- form start -->
                <form action="{{ route('admin.settings.update') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="tile-body">
                            <div class="row">
                                <div class="col-3">
                                    @if (config('settings.site_logo') != null)
                                        <img src="{{ asset('storage/'.config('settings.site_logo')) }}" id="logoImg" style="width: 80px; height: auto;">
                                    @else
                                        <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                                    @endif
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label class="control-label">Site Logo</label>
                                        <input class="form-control" type="file" name="site_logo" onchange="loadFile(event,'logoImg')"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-3">
                                    @if (config('settings.site_favicon') != null)
                                        <img src="{{ asset('storage/'.config('settings.site_favicon')) }}" id="faviconImg" style="width: 80px; height: auto;">
                                    @else
                                        <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="faviconImg" style="width: 80px; height: auto;">
                                    @endif
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label class="control-label">Site Favicon</label>
                                        <input class="form-control" type="file" name="site_favicon" onchange="loadFile(event,'faviconImg')"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
</section>

@push('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush