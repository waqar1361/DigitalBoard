@extends('layouts.app')

@section('content')
    <div class="col-8">
        <div class="bg-primary p-4">
            <h2>{{ $faq->question }}</h2>
            <hr>
            <section>
                <p>{{$faq->answer}}</p>
            </section>
        </div>
    </div>
@endsection