@extends('layouts.app')

@section('content')
    <div class="col-8">
        <div class="p-4">
            <h2>Q. {{ $faq->question }}</h2>
            <hr>
            <section>
                <p><b>Answer : </b>{{$faq->answer}}</p>
            </section>
        </div>
    </div>
@endsection