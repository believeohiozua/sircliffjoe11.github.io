<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>@yield('title', config('settings.site_admin'))</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ route('welcome') }}"><b>{{ config('settings.site_admin').' Login' }}</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>           

                    <form action="{{ route('admin.login.submit') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email address" autofocus value="{{ old('email') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" name="remember">
                                    <label for="remember">Stay logged in</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.social-auth-links -->
                    <p class="mb-1">
                        <a href="#">I forgot my password</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>
