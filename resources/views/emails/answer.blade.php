@extends('emails.app')

@section('content')
    
    <h3>Your Question: {{ $inquiry->question }}</h3>
    <hr>
    <h3>Answer :</h3>
    <p>{{ $inquiry->answer }}</p>
    
@endsection