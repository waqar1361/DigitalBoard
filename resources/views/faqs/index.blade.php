@extends('layouts.app')

@section('content')
    
    @if(! count($faqs))
        <p>There's Nothing to show</p>
    @endif
    <section class="p-4">
        <ol class="faqs">
            @foreach($faqs as $faq)
                <li><a href="/faqs/{{$faq->id}}">{{$faq->question}}</a></li>
            @endforeach
        </ol>
    </section>

@endsection