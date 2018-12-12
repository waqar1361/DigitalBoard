<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Waqar">
    
    <link rel="icon" href="{{ asset("/favicon.jpg") }}">
    <title>{{ config('app.name') }}</title>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="{{ asset("css/bootstrap.min.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/dashboard.min.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/admin.css") }}" media="all" rel="stylesheet">
</head>
<body class="">

<div class="wrapper">
    
    @include('admin.layouts.sidebar')
    
    <main class="main-panel">
        
        @include('admin.layouts.nav')
        
        @yield('content')
        
        
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; {{ date('Y') }}
                    , All rights are reserved by National Notice Board.
                    Coded by
                    <a href="mailto:waqarqadri6@gmail.com" target="_blank">Mohammad Waqar</a>.
                </div>
            </div>
        </footer>
    </main>
</div>



<script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("js/plugins/perfect-scrollbar.jquery.min.js") }}"></script>
<script src="{{ asset("js/plugins/chartjs.min.js") }}"></script>
<script src="{{ asset("js/plugins/bootstrap-notify.js") }}"></script>
<script src="{{ asset("js/now-ui-dashboard.min.js") }}"></script>
@if(url()->current() === route("admin.create.dept"))
<script src="{{ asset("js/axios-vue.js") }}"></script>
<script src="{{ asset("js/script.js") }}"></script>
@else
<script src="{{ asset("js/admin.js") }}"></script>
@endif

</body>
</html>