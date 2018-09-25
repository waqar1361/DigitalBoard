<ul class="list-group pb-3">

    <li class="card border-0 text-center">
        <h4 class="card-header">
            <a href="#govt" data-toggle="collapse" aria-controls="govt" aria-expanded="true">
                Government
            </a>
        </h4>
    </li>
    <div class="collapse show" id="govt" data-parent=".list-group">
        @foreach($dept::depts('govt') as $item)
            @include('layouts.sidebar-item')
        @endforeach
    </div>

    @if( count( $dept::depts('semi-govt') ) )
        <li class="card border-0 text-center">
            <h4 class="card-header">
                <a href="#semiGovt" class="text-light" data-toggle="collapse" aria-controls="semiGovt" aria-expanded="false">
                    Semi Government
                </a>
            </h4>
        </li>
        <div class="collapse" id="semiGovt" data-parent=".list-group">
            @foreach($dept::depts('semi-govt') as $item)
                @include('layouts.sidebar-item')
            @endforeach
        </div>
    @endif

    @if( count( $dept::depts('Private') ) )
        <li class="card border-0 text-center">
            <h4 class="card-header">
                <a href="#private" class="text-light" data-toggle="collapse" aria-controls="private" aria-expanded="false">
                    Private
                </a>
            </h4>
        </li>
        <div class="collapse" id="private" data-parent=".list-group">
            @foreach($dept::depts('private') as $item)
                @include('layouts.sidebar-item')
            @endforeach
        </div>
    @endif
</ul>

<hr>

<ul class="list-group text-right pr-4">
    <h4>Archives</h4>
    @foreach($archives as $state)
        <li>
            <a href="/documents?month={{ $state->month }}&year={{ $state->year }}">
                {{ $state->month ." ". $state->year }}
            </a>
        </li>
    @endforeach
</ul>