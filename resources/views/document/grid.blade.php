@php($size = 3)
<section id="grid" style="{{ $_COOKIE['layout'] != 'grid' ? "display: none" : "" }}">
    @foreach($results as $document)
        @if ($loop->iteration % $size == 1)
            <div class="row mb-md-3">
                @endif
                
                <div class="col-md-{{ 12/$size }}">
                    <article class="card mb-3 mb-md-0">
                        <div class="card-header">
                            <a href="browse/{{ $document->file }}" class="card-title">
                                <h5 data-toggle="tooltip" data-placement="bottom"
                                    title="{{$document->subject}}">
                                    {{ $document->short_name }}
                                </h5>
                            </a>
                        </div>
                        
                        <div class="card-body text-justify">
                            <div><strong>Category : </strong> <span class="text-capitalize">{{ $document->type }}</span></div>
                            <div><strong>Department : </strong> {{ $document->department->name }} </div>
                        </div>
                        <div class="card-footer bg-primary text-light text-center">
                            {{  $document->issued_at->format("d M, Y") }}
                        </div>
                    </article>
                </div>
                @if ($loop->iteration % $size == 0 or $loop->last)
            </div>
        @endif
    @endforeach
</section>