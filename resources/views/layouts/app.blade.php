<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    
    <title>{{ config('app.name') }}</title>
    
    <link rel="icon" href="{{asset("favicon.jpg")}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @if($_COOKIE['theme'] == "light")
        <link rel="stylesheet" href="{{asset('css/theme_light.css')}}" id="theme">
    @endif
    @if($_COOKIE['theme'] == 'dark')
        <link rel="stylesheet" href="{{asset('css/theme_dark.css')}}" id="theme">
    @endif
    {{--<link rel="stylesheet" href="{{asset('css/style.css')}}">--}}

</head>
<body>
<div class="wrapper container">
    
    @include('layouts.nav')
    <main>
        @yield('content')
    </main>
    
{{--</div>--}}
{{--<div class="container">--}}
    @include('layouts.footer')
</div>

<script src="{{asset('js/app.js')}}"></script>

{{--<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>--}}
{{--<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>--}}
{{--<script src="{{asset('js/vue.js')}}"></script>--}}
{{--<script src="{{asset('js/script.js')}}"></script>--}}

</body>
</html>