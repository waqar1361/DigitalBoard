@extends('layouts.app')
@section('page','landing')
@section('header')
    <div class="page-header page-header-mini clear-filter">
        <div class="page-header-image" data-parallax="true" style="background-image:url({{config('app.image-path')}});">
        </div>
        <div class="container">
            <h2 class="text-capitalize">Download {{ $document->type }} </h2>
            <p>Click on open for preview and for download click on download button given below</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="mx-auto col-md-9 my-5">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-4">{{ $document->subject }}</h3>
                
                <section class="row justify-content-around bg-light">
                    <span><i class="fa fa-eye"></i> {{$document->views}}</span>
                    <span><i class="fa fa-download"></i> {{$document->downloads}}</span>
                    <span><i class="fa fa-bookmark"></i> {{ $document->users->count() }}</span>
                </section>
                
                <a href="{{ $document->isBookmarked() ?
                        route('unmark.document',$document->file) :
                        route('bookmark.document',$document->file) }}"
                   class="btn btn-outlne-info btn-sm pull-right">
                    <i class="{{ $document->isBookmarked() ? "fa" : "far" }} fa-bookmark   "></i>
                    {{ $document->isBookmarked() ? "Remove" : "Save" }}
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-capitalize">
                    <tr>
                        <th>Type :</th>
                        <th>department :</th>
                    </tr>
                    <tr>
                        <td>{{ $document->type }}</td>
                        <td>{{ $document->department->name }}</td>
                    </tr>
                    <tr>
                        <th>date issued :</th>
                        <th>size :</th>
                    </tr>
                    <tr>
                        <td>{{ $document->issued_at->format("M, d, Y") }}</td>
                        <td>{{ $document->fileSize }} MB</td>
                    </tr>
                    <tr>
                        <th>View :</th>
                        <th>Download :</th>
                    </tr>
                    <tr>
                        <td>
                            <a class="" href="/documents/{{ $document->file }}">open</a>
                        </td>
                        <td>
                            <a class="" href="/download/{{ $document->file }}">Download</a>
                        </td>
                    </tr>
                </table>
            
            </div>
            <h4 class="text-center">Share on</h4>
            <div class="card-footer text-center border-top bg-light">
                
                <a href="http://www.linkedin.com/shareArticle?url={{url()->current()}}&title={{$document->subject}}"
                   class="btn btn-neutral btn-icon btn-linkedin btn-round"
                   rel="tooltip" title="Share on" data-placement="bottom">
                    <i class="fab fa-linkedin"></i>
                </a>
                
                <a href="https://twitter.com/share?url={{url()->current()}}&text={{$document->subject}}&hashtags={{config('app.name')}}"
                   class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg"
                   rel="tooltip" title="Share on Twitter" data-placement="bottom">
                    <i class="fab fa-twitter"></i>
                </a>
                
                <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&title={{config('app.name')}}"
                   class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg"
                   rel="tooltip" title="Share on FaceBook" data-placement="bottom">
                    <i class="fab fa-facebook-square"></i>
                </a>
                
                <a href="https://plus.google.com/share?url={{url()->current()}}"
                   class="btn btn-neutral btn-icon btn-google btn-lg btn-round"
                   rel="tooltip" title="Share on Google Plus" data-placement="bottom">
                    <i class="fab fa-google"></i>
                </a>
                
                <a href="{{url()->current()}}"
                   class="copy-link btn btn-neutral btn-icon btn-github btn-round"
                   rel="tooltip" title="Copy Link" data-placement="bottom">
                    <i class="fab"><span class="fa fa-link"></span></i>
                </a>
            </div>
        
        </div>
    </div>
@endsection