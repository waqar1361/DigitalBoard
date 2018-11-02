@extends('layouts.app')
@php($size = 4)

@section('content')
    
    <div class="row">
        
        <section class="col-sm-12 col-md-9 ">
            <article class="card mb-4 text-justify">
                <h2 class="card-header">Welcome to National Notice Board</h2>
                <p class="card-body">We provide notices and notifications of different departments in Pakistan. You can view them online and also can download them. Documents are available in these formats PDf, Image or docx. You can
                    <a href="/browse">browse</a> different notices and notifications, and filter through as you need, search and find your required notice or notification.
                </p>
            </article>
            
            <div class="card border-dark mb-4">
                <h2 class="card-header">Latest Notices & Notifications<small>[ <a href="/browse?sort=latest">view all</a> ]</small></h2>
                
                <section class="card-body">
                @foreach( Doc::latest()->take(10)->get() as $item)
                    <a href="/browse/{{ $item->file }}">
                        <p title="{{$item->subject}}">{{ $item->subject }}</p>
                    </a>
                @endforeach
                </section>
            </div>
        </section>
        
        <section class="col-md-3 col-sm">
            @include('layouts.sidebar')
        </section>
    
    </div>
@endsection
