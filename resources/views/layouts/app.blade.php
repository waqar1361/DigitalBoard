<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    
    <title>{{ config('app.name') }}</title>
    
    <link rel="icon" href="/favicon.jpg">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div class="wrapper container">
    
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')

</div>

{{--Script--}}
<script src="/js/app.js"></script>
<script src="/js/script.js"></script>
@yield('script')
</body>
</html>