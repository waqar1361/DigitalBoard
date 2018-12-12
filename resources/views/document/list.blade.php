<section id="list" style="{{ $_COOKIE['layout'] != 'list' ? "display: none" : "" }}" >
@foreach($results as $document)
    <div class="card p-2 mb-3">
        <a href="browse/{{ $document->file }}">
            <h5 data-toggle="tooltip" data-placement="left" title="subject">{{$document->subject}}</h5>
        </a>
        <section class="text-capitalize d-none d-sm-flex" title="Information">
            <div><strong>Category : </strong> {{ $document->type }},</div>
            <div><strong>Department : </strong> {{ $document->department->name }},</div>
            <div><strong>Date issued : </strong> {{  $document->issued_at->format("dS M, Y") }}</div>
        </section>
    </div>
@endforeach
</section>