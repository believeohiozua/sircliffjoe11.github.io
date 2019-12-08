<div class="modal modal-info fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#003679">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-center" style="color:white">Login Here</h4>
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
                                <form method="POST" action="{{ route('login') }}"> @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="login" class="text">Mobile Number / Username</label>
                                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" placeholder="Mobile Number or Username" value="{{ old('login') }}" required autocomplete="login" autofocus style="font-size: 18px; color:#003679">
                                                @error('login')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password" class="text">Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" style="font-size: 18px; color:#003679">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn credit-btn mt-30" type="submit">Login</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <div class="col">                    
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
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
                            <a class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#register" style="color:whitesmoke">
                                {{ __('Or Click Here To Register') }}
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>