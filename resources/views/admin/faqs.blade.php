@extends('admin.layouts.app')

@section('name','FAQ\'s')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    
    <div class="content">
        <div class="row">
            <div class="col-8-md">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Frequently Asked Questions</h3>
                    </div>
                    <div class="card-body">
                        @if(! count($faqs))
                            <h3>There's nothing to be answer yet</h3>
                        @endif
                        @if(count($faqs))
                            <h4 class="mb-3">Questions to be answered</h4>
                            <ol class="col-8">
                                @foreach($faqs as $faq)
                                    <li class="">
                                        <span class="col-6">{{ $faq->question }}</span>
                                        <a class="btn btn-sm btn-primary" href="/admin/faqs/{{$faq->id}}">Answer</a>
                                    </li>
                                @endforeach
                            </ol>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-header"> <h4 class="card-title">Archives</h4></div>
                    <div class="card-body">
                        @forelse($faqs = \App\faq::latest()->answered()->take(10)->get() as $faq)
                            <p>{{ $faq->id }}- <a href="{{ route('admin.show.faqs',$faq->id) }}">{{ $faq->question }}</a></p>
                            @empty
                            <p>Nothing to show</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection