<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="icon" href="/favicon.jpg">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div class="wrapper">

    @yield('header')

    @include('layouts.nav')

    <div class="container">

        @include('layouts.breads')
        @yield('content')

    </div>

</div><!--Wrapper End -->

@include('layouts.footer')

{{--Script--}}
<script src="/js/app.js"></script>
<script src="/js/toaster.min.js"></script>
<script src="/js/vue.js"></script>
<script src="/js/script.js"></script>

@yield('script')

</body>
</html>