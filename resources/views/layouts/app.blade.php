{{-- @php
$mainClasses = "";
if (request()->routeIs('login')
    || request()->routeIs('register')
    || request()->routeIs('password.request')
    || request()->routeIs('password.reset')
    || request()->routeIs('verification.notice')
    || request()->routeIs('verification.verify')
    || request()->routeIs('password.confirm')
    ) {
    $mainClasses .= 'form-signin';
}
@endphp --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/headers.css') }}" rel="stylesheet">
    <style>
        .card:hover{
            box-shadow: 3px 3px 10px rgba(0,0,0,0.1);
        }
    </style>
    @yield('add_css')
</head>
<body>
    @include('layouts.header')
    <div class="container">

        @yield('container')

    </div>
    @include('layouts.footer')
</body>
    {{-- bootstrap js --}}
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @yield('add_js')
</html>

