@extends('layouts.app')
@section('page','landing')
@section('header')
    <div class="page-header page-header-mini" filter-color="">
        <div class="page-header-image" data-parallax="true" style="background-image:url({{config('app.image-path')}});">
        </div>
        <div class="container">
            <h2 class="text-capitalize">Frequently Asked Questions</h2>
            <p>Hope it helps you</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-10 mx-auto my-5">
        <div class="card">
            <div class="p-4">
                <h3>Q. {{ $inquiry->question }}</h3>
                <hr>
                <section>
                    <p><b>Answer : </b>{{$inquiry->answer}}</p>
                </section>
            </div>
        </div>
    </div>
@endsection