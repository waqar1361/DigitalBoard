@extends('layouts.app')
@section('page','landing')
@section('header')
    <div class="page-header page-header-mini" filter-color="">
        <div class="page-header-image" data-parallax="true" style="background-image:url({{config('app.image-path')}});">
        </div>
        <div class="container">
            <h2 class="text-capitalize">Frequently Asked Questions</h2>
            <div>Hope you'll get your answers, if you this didn't resolve your problem</div>
            <a class="btn btn-sm btn-primary" href="/support">Ask now</a>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="my-5">
        <div class="col-md card">
            @if(! count($inquiries))
                <h2>There's Nothing to show</h2>
            @endif
            <section class="py-4">
                <h3 class="card-title">Frequently Asked Questions</h3>
                <hr>
                <ol>
                    @foreach($inquiries as $inquiry)
                        <h5>
                        <li>
                            <a href="/faqs/{{$inquiry->id}}">{{$inquiry->question}}</a>
                        </li>
                        </h5>
                    @endforeach
                </ol>
            </section>
        </div>
    </div>

@endsection