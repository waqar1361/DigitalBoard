@extends('layouts.dashboard')

@section('title', 'Welcome to Admin panel')

@section('dashboard-content')

    <div class="row">

        <div class="col">
            <div class="card text-center border-primary mb-3">
                <div class="card-header p-2 text-dark">
                    <h4 class="card-title m-0">Total Departments</h4>
                </div>
                <div class="card-body p-2">
                    <b>{{ \App\Department::get()->count() }}</b>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-center border-primary mb-3">
                <div class="card-header p-2 text-dark">
                    <h4 class="card-title m-0">Notices Published</h4>
                </div>
                <div class="card-body p-2">
                    <b>{{ \App\Notice::get()->count() }}</b>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-center border-primary mb-3">
                <div class="card-header p-2 text-dark">
                    <h4 class="card-title m-0">Notifications Published</h4>
                </div>
                <div class="card-body p-2">
                    <b>{{ \App\Notification::get()->count() }}</b>
                </div>
            </div>
        </div>


    </div>
@endsection
