<section id="list" style="{{ $_COOKIE['layout'] != 'list' ? "display: none" : "" }}">
    @foreach($results as $document)
        <div class="card mb-3">
            <div class="row">
                
                <div class="col-md-2 text-justify d-xs-none">
                    <div class="card-group rounded text-light bg-primary">
                        <h3 class="p-3 m-0">
                            {{$document->issued_at->format("M, d")}}<br>
                            {{$document->issued_at->format("Y")}}
                        </h3>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card-header">
                        <a class="card-title" href="browse/{{ $document->file }}">
                            <h5>{{$document->subject}}</h5>
                        </a>
                    </div>
                    <section class="col card-body text-capitalize d-none d-sm-flex">
                        <div><strong>Category : </strong> {{ $document->type }},</div>
                        <div><strong>Department : </strong> {{ $document->department->name }},</div>
                        {{--<div><strong>Date issued : </strong> {{  $document->issued_at->format("dS M, Y") }}</div>--}}
                    </section>
                </div>
            
            </div>
        </div>
    @endforeach
</section>