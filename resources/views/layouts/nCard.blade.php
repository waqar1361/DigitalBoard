<div class="card mb-3">
    <div class="card-header text-dark">
        <p class="dept-name">{{ $item->department->name }}</p>
        <p class="issue-date">{{ $item->created_at->toFormattedDateString() }}</p>
        <span class="far fa-file-pdf fa-6x"></span>
        <h3 class="card-title m-0">
            <a href="{{url()->current()}}/{{ $item->department->name }}/{{$item->file}}" class="btn-link" target="_blank">
            {{ $item->title }}
            </a>
        </h3>
    </div>
    <div class="card-body p-0">

            <a href="/download/{{$item->file}}" role="button" class="btn btn-block btn-secondary">
                <span class="fas fa-download"></span>
                Download
            </a>

    </div>
</div>