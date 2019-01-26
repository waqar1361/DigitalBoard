<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Waqar">
    
    <link rel="icon" href="{{ asset("favicon.ico") }}">
    <title>{{ config('app.name') }}</title>
    
    <link href="{{ asset("css/libs/bootstrap-3.min.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/libs/font-awesome-4.min.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/libs/ionicons.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/users/theme.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/users/skins.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
   
    
    {{--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
  
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    
</head>

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
    
    @include('users.nav')
    
    @include('users.sidebar')
    
    <div class="content-wrapper">
        
        <!-- Content Header (Page header) -->
        {{--<section class="content-header">--}}
            {{--<h1>--}}
                {{--Page Header--}}
                {{--<small>Optional description</small>--}}
            {{--</h1>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
                {{--<li class="active">Here</li>--}}
            {{--</ol>--}}
        {{--</section>--}}
        
   
        <section class="content container-fluid">
            
           @yield('content')
        
        </section>
    
    </div>
    
    <footer class="main-footer">
        <div class="text-center">
        
            <div class="copyright" id="copyright">
                &copy; {{ date('Y') }}
                , All rights are reserved by National Notice Board.
                Developed by Group # 17,
                <a href="http://www.giccl.edu.pk/">Govt. Islamia College</a> Civil Lines LHR.
            </div>
        </div>
    </footer>
    
   @include('users.options')
    <div class="control-sidebar-bg"></div>
</div>


<script src="{{ asset("js/libs/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("js/libs/bootstrap-3.min.js") }}"></script>
<script src="{{ asset("js/users/adminlte.min.js") }}"></script>
<script src="{{ asset("js/users/script.js") }}"></script>
<script src="{{ asset("js/users/adminlte.js") }}"></script>
<script src="{{ asset("js/plugins/bootstrap-notify.js") }}"></script>
<script src="{{ asset("js/script.js") }}"></script>
@include('layouts.alert')
{{--@yield('sc')--}}
</body>
</html>
