@extends('layouts.app')
@section('nav')

    <div class="collapse navbar-collapse" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/"><span class="fa fa-home"></span></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link">National Notice Board</a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="container mt-4">
        {{--<div class="row">--}}
        <form action="">
            <div class="row">
                <div class="col-10">
                    <div class="form-label-group">
                        <input type="text" id="search" class="form-control" name="q" value="" placeholder="Search">
                        <label for="search">Search</label>
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-success" autofocus><span class="fa fa-search"></span> By Dept</button>
                </div>
            </div>
        </form>
        {{--</div>--}}
    </div>
@endsection