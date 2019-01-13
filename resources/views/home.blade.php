@extends('layouts.app')
@section('page','index')
@section('header')
    
    <div class="page-header clear-filter">
        <div class="page-header-image" data-parallax="true" style="background-image:url({{config('app.image-path')}})">
        </div>
        <div class="container">
            <div class="content-center brand">
                <img class="n-logo" src="/images/Logo.png" alt="NNB">
                <h1 class="h1-seo">National Notice Board</h1>
                <h5>Notices & Notifications of any department in Pakistan <br> Free Download</h5>
                <a href="/browse" class="btn btn-sm btn-primary">Browse Now</a>
            </div>
            <h6 class="category category-absolute">
                Developed By Group # 17's Team Lead
                <a href="mailto:waqarqadri6@gmail.com">
                    Muhammad Waqar
                </a>
            </h6>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="page row">
        
        <section class="col-md">
            <div class="card mb-4">
                
                <div class="card-header">
                    <h2 class="card-title text-center">Latest Notices</h2>
                </div>
                
                <div class="card-body">
                    @foreach( $notices as $item)
                        <p>
                            @if($item->created_at->diffInDays(Carbon::now()) < 8)
                                <span class="badge bg-primary">New</span>
                            @endif
                            <a href="/browse/{{ $item->file }}" title="{{$item->subject}}">
                                {{ $item->subject }}
                            </a>
                            <span class="pull-right" data-toggle="tooltip" title="Issued Date">
                                {{ $item->issued_at->format('M-d, Y') }}
                            </span>
                        </p>
                    @endforeach
                    <div class="text-center">[ <a href="/browse?type=notice&sort=latest">view more</a> ]</div>
                </div>
            
            </div>
        </section>
        
        <section class="col-md">
            <div class="card border-dark mb-4">
                
                <div class="card-header">
                    <h2 class="card-title text-center">Latest Notifications</h2>
                </div>
                
                <div class="card-body">
                    @foreach( $notifications as $item)
                        <p>
                            @if($item->created_at->diffInDays(Carbon::now()) < 8)
                                <span class="badge bg-primary">New</span>
                            @endif
                            <a href="/browse/{{ $item->file }}" title="{{$item->subject}}">
                                {{ $item->subject }}
                            </a>
                            <span class="pull-right" data-toggle="tooltip" title="Issued Date">
                                {{ $item->issued_at->format('M-d, Y') }}
                            </span>
                        </p>
                    @endforeach
                    <div class="text-center">[ <a href="/browse?type=notification&sort=latest">view more</a> ]</div>
                </div>
            
            </div>
        </section>
    </div>
@endsection