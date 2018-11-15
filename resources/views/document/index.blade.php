@extends('layouts.app')
@section('content')
   
   <div class="row">
      <div class="offset-1 col-7">
         <h3 class="text-light text-justify mb-4">{{ $document->subject }}</h3>
         <table class="table table-bordered table-dark text-capitalize">
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
               <td><a class="btn btn-primary" href="/documents/{{ $document->file }}"><span class="fas fa-file-pdf"></span>
                     open</a></td>
               <td><a class="btn btn-primary" href="/download/{{ $document->file }}"><span class="fas fa-download"></span>Download</a>
               </td>
            </tr>
         </table>
         
         
         <section class="card col-6 py-2">
            <h4>Share on</h4>
            <div class="container-fluid">
               <nav class="d-flex text-justify">
                  {{--  FACEBOOK  --}}
                  <a class="py-0 px-1 brand rounded facebook nav-link"
                     href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&title={{config('app.name')}}"
                     target="_blank"><span class="fab fa-2x fa-facebook"></span></a>
                  {{--  TWITTER --}}
                  <a class="py-0 px-1 brand rounded twitter nav-link"
                     href="https://twitter.com/share?url={{url()->current()}}&text={{$document->subject}}&hashtags={{config('app.name')}}"
                     target="_blank"><span class="fab fa-2x fa-twitter-square"></span></a>
                  {{--  GOOGLE PLUS --}}
                  <a class="py-0 px-1 brand rounded plus nav-link"
                     href="https://plus.google.com/share?url={{url()->current()}}"
                     target="_blank"><span class="fab fa-2x  fa-google-plus-square"></span></a>
                  {{--  LINKEDIN  --}}
                  <a class="py-0 px-1 brand rounded linkedIn nav-link"
                     href="http://www.linkedin.com/shareArticle?url={{url()->current()}}&title={{$document->subject}}"
                     target="_blank"><span class="fab fa-2x  fa-linkedin"></span></a>
               </nav>
            </div>
         </section>
      
      </div>
      
      
      {{--<div class="col-1 ml-auto" title="Share">--}}
      {{--<div class="text-center share rounded">--}}
      {{--{!! Share::currentPage(null,[],"<ul class='list-unstyled'>",'</ul>')->facebook()->twitter()->googlePlus()->linkedin() !!}--}}
      {{--</div>--}}
      {{--</div>--}}
   </div>
@endsection