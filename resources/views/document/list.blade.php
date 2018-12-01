<section id="list" style="{{ $_COOKIE['layout'] != 'list' ? "display: none" : "" }}" >
@foreach($results as $document)
    <div class="card p-2 mb-3">
        <a href="browse/{{ $document->file }}">
            <h5 data-toggle="tooltip" data-placement="left" title="subject">{{$document->subject}}</h5>
        </a>
        <section class="text-muted" title="Information">
            <strong>Department : </strong> {{ $document->department->name }} ,
            <strong>Date issued : </strong> {{  $document->issued_at->format("dS M, Y") }}
        </section>
    </div>
@endforeach
</section>