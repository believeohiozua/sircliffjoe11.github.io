<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Brainstaq - An ideas sharing platform">
    <meta name="keywords" content="startup, entrepreneurs, ideas, crowdfunding">
    <meta name="author" content="Designed by Ettah Clifford Joe">
    <title>@yield('title', 'Brainstaq | Share and discover disruptive ideas')</title>
    <script src="{{ asset('frontend/css/fontawesome/js/all.js') }}"></script>
    <script src="{{ asset('frontend/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/css/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/view-more-button.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap-datepicker/css/bootstrap-datepicker.css') }}">
    <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('frontend/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
</head>

<body>
    {{-- Header --}}
    @include('user.partials.header')

    @yield('content')

    @include('user.partials.footer')
</body>

</html>