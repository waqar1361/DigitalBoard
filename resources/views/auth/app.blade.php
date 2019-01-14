<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Waqar">
    
    <link rel="icon" href="{{ asset("favicon.png") }}">
    <title>{{ config('app.name') }}</title>
    
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="{{ asset("css/libs/bootstrap.min.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/main/theme.min.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/main/login.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/style.css") }}" media="all" rel="stylesheet">

</head>

<body class="login-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" rel="tooltip" title="{{ config('app.name') }}" href="/">
                NNB
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{config('app.image-path')}}">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{ Nav::isRoute('login')}}">
                    <a class="nav-link" href="{{ route('login') }}">Log In</a>
                </li>
                <li class="nav-item {{ Nav::isRoute('register')}}">
                    <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                </li>
                <li class="nav-item {{ Nav::isRoute('admin.login')}}">
                    <a class="nav-link" href="{{route('admin.login')}}">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header clear-filter" filter-color="">
    <div class="page-header-image" style="background-image:url({{config('app.image-path')}})"></div>
    <div class="content">
        @yield('content')
    </div>
    
    <footer class="footer">
        <div class="container">
            
            <div class="copyright" id="copyright">
                &copy; {{ date('Y') }}
                , All rights are reserved by National Notice Board.
                Developed by
                <a href="mailto:waqarqadri6@gmail.com">Muhammad Waqar</a>
                , Group # 17,
                <a href="http://www.giccl.edu.pk/">Govt. Islamia College</a> Civil Lines LHR.
            </div>
        </div>
    </footer>
</div>


<script src="{{ asset('/js/libs/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/libs/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/main/nuk.min.js')}}" type="text/javascript"></script>

</body>

</html>
