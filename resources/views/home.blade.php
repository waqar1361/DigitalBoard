@extends('layouts.app')
@php($size = 4)

@section('content')
    
    <div class="row">
        
        <section class="col-sm-12 col-md-9 ">
            <article class="card bg-dark mb-4 text-justify">
                <h1 class="card-header text-light siteName">Welcome to National Notice Board</h1>
                <p class="card-body">We provide notices and notifications of different departments in Pakistan. You can view them online and also can download them. Documents are available in these formats PDf, Image or docx. You can
                    <a href="/browse">browse</a> different notices and notifications, and filter through as you need, search and find your required notice or notification.
                </p>
            </article>
            
            <div class="mb-4 card bg-dark border-dark p-2">
                <h3>
                    Latest Notices & Notifications
                    <small>[ <a href="/browse?sort=latest">view all</a> ]</small>
                </h3>
                <hr>
                @foreach( Doc::latest()->take(10)->get() as $item)
                    <a href="/browse/{{ $item->file }}">
                        <p title="{{$item->subject}}">{{ $item->subject }}</p>
                    </a>
                @endforeach
            </div>
        </section>
        
        <section class="col-md-3 col-sm ">
            @include('layouts.sidebar')
        </section>
    
    </div>
@endsection
