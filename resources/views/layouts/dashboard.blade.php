@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-2">
            @include('layouts.adminMenu')
        </div>

        <div class="col mt-4">
            @yield('dashboard-content')
        </div>

    </div>
@endsection