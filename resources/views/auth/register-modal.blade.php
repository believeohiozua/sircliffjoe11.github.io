<div class="modal modal-info fade" id="register">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#003679">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-center" style="color:white">Apply Here</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                
            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page" style="color:white">
                                <form method="POST" action="{{ route('application.create') }}"> @csrf 

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name<span class="text-danger">*</span></label>
                                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autofocus placeholder="First Name" style="font-size: 18px; color:#003679">
                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name<span class="text-danger">*</span></label>
                                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required placeholder="Last Name" style="font-size: 18px; color:#003679">
                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>                                         

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="gender">Gender<span class="text-danger">*</span></label>
                                                <select name="gender" id="gender" name="gender" class="form-control" style="font-size: 18px; color:#003679">
                                                    <option value="">Select</option>
                                                    @foreach ($application->genderOptions() as $key => $value)
                                                        <option value="{{ $key }}" {{ old('gender') == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="mobile">Mobile Number <small>(080xxxxxxxx)</small><span class="text-danger">*</span></label>
                                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required placeholder="Phone Number" maxlength="11" minlength="11" style="font-size: 18px; color:#003679">
                                                @error('mobile')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> 

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email">Email Address (optional)</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" style="font-size: 18px; color:#003679">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>                                           

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="city">City<span class="text-danger">*</span></label>
                                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required placeholder="City" style="font-size: 18px; color:#003679">
                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>                                          

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="state">State<span class="text-danger">*</span></label>
                                                <select name="state" id="state" name="state" class="form-control" style="font-size: 18px; color:#003679">
                                                    <option value="">-- Please Select --</option>
                                                    @foreach ($application->stateOptions() as $value)
                                                        <option value="{{ $value }}" {{ old('state') == $value ? 'selected' : '' }}>{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                                @error('state')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="source" class="text">How Did You Hear About {{ config('settings.site_title') }}?<span class="text-danger">*</span></label>                                                    
                                                <textarea class="form-control" name="source" id="source" placeholder="How did you hear about us?" required style="font-size: 18px; color:#003679; height:100px;" maxlength="191">{{ old('source') }}</textarea>
                                                @error('source')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="about" class="text">Tell Us About Yourself<span class="text-danger">*</span><br>
                                                    <small>(This will help us process your application faster.)</small> </label>
                                                <textarea class="form-control" name="about" id="about" placeholder="Tell us about yourself. Why do you want to join {{ config('settings.site_title') }}. Osusu is all about trust." required style="font-size: 18px; color:#003679; height:150px;" maxlength="256">{{ old('about') }}</textarea>
                                                @error('about')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>                                     

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="package">Choose A Package<span class="text-danger">*</span></label>
                                                <select name="package" id="package" name="package" class="form-control" style="font-size: 18px; color:#003679" required>
                                                    <option value="">-- Please Select --</option>
                                                    @foreach ($application->productOptions() as $key => $value)
                                                        <option value="{{ $key }}" {{ old('package') == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                                @error('package')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }} required>
                                                        <label class="form-check-label" for="terms">
                                                            {{ trans('By submitting this application, you have accepted all of the terms and conditions of this website.') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                                           

                                        <div class="col-lg-12">
                                            <div class="captcha"> 
                                                <span>{!! captcha_img('flat') !!}</span>
                                                <button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>
                                                <div class="form-group">
                                                   <input id="captcha" type="text" class="form-control input-sm @error('captcha') is-invalid @enderror" placeholder="Enter Captcha" name="captcha" required>
                                                    @error('captcha')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 text-center">
                                            <button class="btn credit-btn mt-30" type="submit">Submit Application</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                    <div class="col-12 text-center">
                        <div class="col">
                            <a class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#login" style="color:whitesmoke">
                                {{ __('Or Click Here To Login') }}
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        $('#refresh').click(function(){
        $.ajax({
            type:'GET',
            url:'refreshcaptcha',
            success:function(data){
                $(".captcha span").html(data.captcha);
            }
        });
        });
    </script>
@endpush