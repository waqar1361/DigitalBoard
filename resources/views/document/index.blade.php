@extends('layouts.app')
@section('content')

    <h2>Notices / Notifications</h2>
    @foreach($rows as $row)
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
    @if(!$rows->first())
        There's noting to show
    @endif
@endsection