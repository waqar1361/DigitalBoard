@extends('layouts.app')
@section('content')

    <form action="/search">
        <div class="row">
            <div class="col-8 offset-1">
                <div class="form-group">
                    <input type="text" id="search" class="form-control" name="q" value="{{ $q or '' }}" placeholder="Search">
                </div>
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
            <span class="offset-1 text-muted">
                You search for "{{ $q or "noting"}}"
            </span>

    </form>
    <hr>
    <div class="container">
        @if($results != null)
            @foreach($results as $row)
                <div class="card p-2 mb-2">
                    <a href="/documents/{{ $row->file }}" target="_blank">
                    <h5 title="subject">{{$row->subject}}</h5>
                    </a>
                    <span class="text-muted" title="Information">
                        <b>Department : </b> {{ $row->department->name }},
                        <b>Date issued : </b> {{  $row->issued_at->format("dS M, Y") }}
                    </span>
                </div>
            @endforeach
        @endif
        @if(!count($results))
            No result found, Try Again
        @endif
    </div>

@endsection