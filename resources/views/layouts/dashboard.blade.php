<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    
    <title>{{ config('app.name') }}</title>
    
    <link rel="icon" href="{{asset('favicon.jpg')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>
<body>
<div class="wrapper">
    
    <div class="container">
        <nav class="navbar shadow navbar-dark fixed-top">
            <h2 class="col-6 m-auto text-center py-2">@yield('title')</h2>
        </nav>
        
        <div class="row">
            
            <div class="col-2">
                @include('layouts.adminMenu')
            </div>
            
            <div class="col dashboard-content">
                @yield('content')
            </div>
        
        </div>
    
    </div>

</div><!--Wrapper End -->

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/toaster.js')}}"></script>
</body>
</html>

