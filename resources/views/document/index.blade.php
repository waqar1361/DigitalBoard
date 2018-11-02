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
                    <td>{{ $document->department->name }}</td>
                </tr>
                <tr class="table-active">
                    <th>date issued :</th>
                    <th>size :</th>
                </tr>
                <tr>
                    <td>{{ $document->issued_at->format("M, d, Y") }}</td>
                    <td>{{ $document->fileSize() }} MB</td>
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
        
        
        <div class="col-1 ml-auto" title="Share">
            <div class="text-center share rounded">
                {!! Share::currentPage(null,[],"<ul class='list-unstyled'>",'</ul>')->facebook()->twitter()->googlePlus()->linkedin() !!}
            </div>
        </div>
    </div>
@endsection