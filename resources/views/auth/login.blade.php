@extends('layouts.guest-master')
@section('title', 'Brainstaq | Login')
@section('content')
<!-- Login form -->

    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">{{ __('Login') }}</h4><br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- form-group -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>
            
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <div class="checkbox">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                      </div>
                    </div>
                  </div>
                
                <!-- form-group -->                                      
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                
                    @if (Route::has('password.request'))
                        <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                                {{ __('Reset Password?') }}
                        </a>
                    @endif
                </div><br>


                <!-- form-group -->      
                <p class="text-center">Don't have an account?
                    <a href="{{ route('register') }}"> Register</a>
                </p>                                                            
            </form>
    </article>
<!-- End Registration form-->
<!-- card -->
<br><br>
    <article class="bg-secondary mb-3">  
    <div class="card-body text-center">
        <h1 class="text-white mt-3">Join the Movement</h1>
            <p class="h5 text-white">Share, validate and market your ideas and projects,<br>and attract cofounders and investors</p><br>
            <p><a class="btn btn-primary" target="_blank" href="{{ route('discover') }}">Discover Innovative Ideas</a></p>
    </div>
<br><br>
    </article>

@endsection
