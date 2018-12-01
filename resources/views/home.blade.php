@extends('layouts.app')
@php($size = 4)

@section('header')
    <header class="text-center"><span id="bismilla">1</span></header>
@endsection
@section('content')
    
    <div class="jumbotron">
        <h1 class="display-4 ff-BR">National Notice Board</h1>
        
        <p class="lead text-justify">Welcome to National Notice Board, We provide notices and notifications of different departments in Pakistan. You can view them online and also can download them. Documents are available in these formats PDf, Image or docx. You can
            <a href="/browse">browse</a> different notices and notifications, and filter through as you need, search and find your required notice or notification.
        </p>
    
    </div>
    
    <div class="row">
        
        <section class="col-sm-12 col-md-9 ">
            
            <div class="card border-dark mb-4">
                <h2 class="card-header">Latest Notices
                    <small>[ <a href="/browse?type=notice&sort=latest">view all</a> ]</small>
                </h2>
                
                <section class="card-body">
                    @foreach( Doc::latest()->notices()->take(5)->get() as $item)
                        <p>
                            <a href="/browse/{{ $item->file }}" title="{{$item->subject}}">
                                {{ $item->subject }}
                            </a>
                        </p>
                    @endforeach
                </section>
            </div>
            <div class="card border-dark mb-4">
                <h2 class="card-header">Latest Notifications
                    <small>[ <a href="/browse?type=notification&sort=latest">view all</a> ]</small>
                </h2>
                
                <section class="card-body">
                    @foreach( Doc::latest()->notifications()->take(5)->get() as $item)
                        <p>
                            <a href="/browse/{{ $item->file }}" title="{{$item->subject}}">
                                {{ $item->subject }}
                            </a>
                        </p>
                    @endforeach
                </section>
            </div>
            
            
        </section>
        
        <section class="col-md-3 col-sm">
            @include('layouts.sidebar')
        </section>
    
    </div>

@endsection