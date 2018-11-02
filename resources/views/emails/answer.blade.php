@extends('emails.app')

@section('content')
    
    <h3>Your Question: {{ $faq->question }}</h3>
    <hr>
    <h3>Answer :</h3>
    <p>{{ $faq->answer }}</p>
    
@endsection