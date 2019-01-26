<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Waqar">
    
    <link rel="icon" href="{{ asset("/favicon.ico") }}">
    <title>{{ config('app.name') }}</title>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="{{ asset("css/libs/fontawesome.css") }}" rel="stylesheet">
    <link href="{{ asset("css/libs/bootstrap.min.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/libs/bootstrap-datepicker.min.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/admin/dashboard.min.css") }}" media="all" rel="stylesheet">
    
    <link href="{{ asset("css/admin/style.css") }}" media="all" rel="stylesheet">

</head>
<body class="">

<div class="wrapper">
    
    @include('admin.layouts.sidebar')
    
    <main class="main-panel">
        
        @include('admin.layouts.nav')
        
        @yield('content')
        
        
        <footer class="footer">
            <div class="container">
                
                <div class="copyright" id="copyright">
                    &copy; {{ date('Y') }}
                    , All rights are reserved by National Notice Board.
                    Developed by Group # 17,
                    <a href="http://www.giccl.edu.pk/">Govt. Islamia College</a> Civil Lines LHR.
                </div>
            </div>
        </footer>
    </main>
</div>


<script src="{{ asset("js/libs/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("js/libs/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("js/plugins/perfect-scrollbar.jquery.min.js") }}"></script>
<script src="{{ asset("js/plugins/chartjs.min.js") }}"></script>
<script src="{{ asset("js/plugins/bootstrap-notify.js") }}"></script>
<script src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset("js/admin/dashboard.min.js") }}"></script>
@if(url()->current() === route("admin.create.dept"))
    <script src="{{ asset("js/admin/axios-vue.js") }}"></script>
    <script src="{{ asset("js/admin/script.js") }}"></script>
@else
    <script src="{{ asset("js/admin/admin.js") }}"></script>
@endif
@if(url()->current() === route("admin.home"))
    <script src="{{ asset("js/admin/chart.js") }}"></script>
@endif

@include('layouts.alert')

</body>
</html>