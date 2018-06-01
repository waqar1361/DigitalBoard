@extends('layouts.app')
@php($size = 3)
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <div class="col-8 offset-2 mt-4">
        @foreach( $items as $item )

            @if ($loop->iteration % $size == 1)
                <div class="row">
                    @endif

                    <div class="col">

                        <div class="card text-center border-primary mb-3">
                            <div class="card-header text-dark">
                                <h3 class="card-title m-0">{{ $item->name }}</h3>
                            </div>
                            <div class="card-body p-2">
                                <div class="btn-group" role="group">
                                    <a href="{{$item->name}}/notices" role="button" class="btn btn-dark">
                                        <span class="badge badge-secondary ml-auto">{{ $item->notices->count()  }}</span> Notices
                                    </a>
                                    <a href="{{$item->name}}/notifications" role="button" class="btn btn-secondary">
                                        Notifications  <span class="badge badge-dark ml-auto">{{ $item->notifications->count()  }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    @if ($loop->iteration % $size == 0 )
                </div>
            @endif
            @if ($loop->last)
    </div>
    @endif
    @endforeach
    </div>
@endsection