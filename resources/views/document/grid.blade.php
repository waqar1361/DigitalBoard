@php($size = 3)
<section id="grid" style="{{ $_COOKIE['layout'] != 'grid' ? "display: none" : "" }}" >
@foreach($results as $document)
    @if ($loop->iteration % $size == 1)
        <div class="row mb-3">
            @endif
            
            <div class="col-{{ 12/$size }}">
                <article class="card">
                    <a href="browse/{{ $document->file }}" class="card-header">
                        <h5 data-toggle="tooltip" data-placement="bottom"
                            title="{{$document->subject}}">{{ str_limit($document->subject, 21)}}</h5>
                    </a>
                    
                    <section class="card-body px-2 text-justify">
                        <strong>Type : </strong> <span class="text-capitalize">{{ $document->type }}</span> <br>
                        <strong>Department : </strong> {{ $document->department->name }} <br>
                        <strong>Date issued : </strong> {{  $document->issued_at->format("dS M, Y") }}
                    </section>
                </article>
            </div>
            @if ($loop->iteration % $size == 0 or $loop->last)
        </div>
    @endif
@endforeach
</section>