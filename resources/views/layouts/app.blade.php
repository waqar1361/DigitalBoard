<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    
    <title>{{ config('app.name') }}</title>
    
    <link rel="icon" href="{{asset("favicon.ico")}}">
    <link rel="stylesheet" href="{{asset('css/libs/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/style.css')}}">

</head>
<body class="@yield('page')-page sidebar-collapse">

@include('layouts.nav')

<div class="wrapper">
    @yield('header')
    <div class="main py-3">
        
        <div class="container{{request()->segments() == null ? '-fluid' : '' }}">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
</div>

<script src="{{ asset("js/main/app.js") }}"></script>
<script src="{{asset('js/plugins/bootstrap-switch.js')}}"></script>
<script src="{{asset('js/plugins/nouislider.min.js')}}"></script>
<script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('js/main/nuk.min.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@include('layouts.alert')

</body>
</html>