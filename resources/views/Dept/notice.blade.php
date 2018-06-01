@extends('layouts.app')
@php($size = 5)
@section('content')
    <div class="col-8 offset-2 mt-4">
        @if(!$notices->isEmpty())
            <h1> These are all Your Notices</h1>
            @foreach( $notices as $item )
                @if ($loop->iteration % $size == 1)
                    <div class="row">
                        @endif

                        <div class="col">

                            <div class="card text-center border-primary mb-3">
                                <div class="card-header text-dark">
                                    <h3 class="card-title m-0">{{ $item->title }}</h3>
                                </div>
                                <div class="card-body p-2">
                                    <div class="btn-group" role="group">
                                        <a href="{{$item->path}}" role="button" class="btn btn-dark">
                                            <span class="fas fa-download"></span>
                                            Download
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
    @else
        <h2>There is no Notice to show</h2>
        @endif
        </div>
@endsection