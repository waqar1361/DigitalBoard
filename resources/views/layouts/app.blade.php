<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="icon" href="/favicon.jpg">
    <link rel="stylesheet" href="/css/hover.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/theme.min.css">
    <link rel="stylesheet" href="/css/nnb.css">
    <link rel="stylesheet" href="/css/basic.css">

</head>
<body>
<div class="wrapper">

    @yield('header')

    @include('layouts.nav')

    @yield('content')

</div>
{{--Script--}}
{{--<script src="/js/jquery-3.2.1.min.js"></script>--}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/toaster.min.js"></script>
<script src="/js/vue.js"></script>
<script src="/js/script.js"></script>

</body>
</html>