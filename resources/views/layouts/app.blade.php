<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    
    <title>{{ config('app.name') }}</title>
    
    <link rel="icon" href="{{asset("favicon.jpg")}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>
<body>
<div class="wrapper container">
    
    @include('layouts.nav')
    <main>
        @yield('content')
    </main>
   
    @include('layouts.footer')

</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{ asset('js/share.js') }}"></script>
@yield('script')

</body>
</html>