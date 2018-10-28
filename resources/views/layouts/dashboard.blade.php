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
<div class="wrapper">
    
    <div class="container">
        <nav class="navbar shadow navbar-dark bg-dark fixed-top">
            <h2 class="col-8 m-auto text-light text-center">@yield('title')</h2>
        </nav>
        
        <div class="row">
            
            <div class="col-2">
                @include('layouts.adminMenu')
            </div>
            
            <div class="col dashboard-content">
                @yield('dashboard-content')
            </div>
        
        </div>
    
    </div>

</div><!--Wrapper End -->

{{--@include('layouts.footer')--}}

{{--Script--}}
<script src="/js/app.js"></script>
<script src="/js/toaster.js"></script>
<script src="/js/vue.js"></script>
<script src="/js/script.js"></script>

</body>
</html>

