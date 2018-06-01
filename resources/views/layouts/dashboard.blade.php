@extends('layouts.app')

@section('content')
    <div class="row container-fluid">



        <div class="col-2">
            @include('layouts.sidebar')
        </div>

        <div class="col-8 offset-1 mt-4">
            @yield('dashboard-content')
        </div>

    </div>
@endsection