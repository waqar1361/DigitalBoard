@extends('layouts.app')
@section('content')

    <h2 class="text-light text-justify mb-4">{{ $document->subject }}</h2>
	<div class="row">
    <div class="col-7 text-capitalize">
        <table class="table table-bordered">
            <tr class="table-active">
                <th>Type :</th>
                <th>department :</th>
            </tr>
            <tr>
                <td>{{ $document->type }}</td>
                <td>{{ Dept::find($document->department_id)->name }}</td>
            </tr>
            <tr class="table-active">
                <th>date issued :</th>
                <th>size :</th>
            </tr>
            <tr>
                <td>{{ $document->issued_at->format("M, d, Y") }}</td>
                <td>{{ round(filesize("storage/" . $document->file . ".pdf")/1000000,2) }} MB</td>
            </tr>
            <tr class="table-active">
                <th>View :</th>
                <th>Download :</th>
            </tr>
            <tr>
                <td><a href="/documents/{{ $document->file }}">open</a></td>
                <td><a href="/download/{{ $document->file }}">download</a></td>
            </tr>
        </table>
    </div>
	<div class="col">
	<h2 class="text-center">Similar</h2>
	@foreach( Doc::take(3)->get() as $doc )
	<div class="text-justify">
	<a href="" >{{ $doc->subject }} </a>
	</div>
	@endforeach
	</div>
	</div>
@endsection