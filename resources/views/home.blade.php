@extends('layouts.app')
@php($size = 4)

@section('content')
    <div class="row">

        <section class="col-10">
            <div class="mb-4 card bg-dark border-dark p-2">
                <h3>
                    Latest Notices & Notifications
                    <small>[ <a href="/browse?sort=latest">view all</a> ]</small>
                </h3>
                <hr>
                @foreach(\App\Document::latest()->take(5)->get() as $item)
                    <a href="/browse/{{ $item->file }}">
                        <p title="{{$item->subject}}">{{ $item->subject }}</p>
                    </a>
                @endforeach
            </div>
            <div class="mb-4 card bg-dark border-dark p-2">
                <h3>
                    Important Notices & Notifications
                    {{--<small>[ <a href="/search?filter=important">view all</a> ]</small>--}}
                </h3>
                <hr>
                @foreach(\App\Document::latest()->where('tags', 'like', 'important')->take(5)->get() as $item)
                    <p title="{{$item->subject}}">{{ substr($item->subject,0,30) }}</p>
                @endforeach
                Nothing to show for now
            </div>
        </section>

        <div class="col sideBar bg-dark">
            @include('layouts.right-sidebar')
        </div>

    </div>
@endsection
