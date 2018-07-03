@extends('layouts.app')
@php($size = 4)
@section('header')
    @include('layouts.header')
@endsection
@section('content')
        <div class="row">
            <div class="col-2 sideBar">
                @include('layouts.left-sidebar')
            </div>

            <form action="/search" class="col-8">
                <h1>Welcome to National Notice Board</h1>
                <p>You can find here notices and notifications of different departments.</p>
                <div class="form-group">
                    <input type="text" name="q" class="form-control border-success form-control-lg" placeholder="Search">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Search Notices</button>
                    <button class="btn btn-success">Search Notifications</button>
                </div>
            </form>

            <div class="col sideBar">
                @include('layouts.right-sidebar')
            </div>
        </div>
@endsection
