@extends('layouts.dashboard')

@section('title','FAQ\'s')

@section('content')
    @if(! count($faqs))
        <h2>No Question has to be answered yet</h2>
    @endif
    @if(count($faqs))
        <h1 class="mb-3">Questions to be answered</h1>
        <ol class="col-8">
            @foreach($faqs as $faq)
                <li class="">
                    <span class="col-6">{{ $faq->question }}</span>
                    <a class="btn btn-sm btn-primary" href="/admin/faqs/{{$faq->id}}">Answer</a>
                </li>
            @endforeach
        </ol>
    @endif

@endsection