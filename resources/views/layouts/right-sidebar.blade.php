<ul class="list-group text-right">
    <h4>Archives</h4>
    @foreach($archives as $state)
        <li>
            <a href="/documents?month={{ $state->month }}&year={{ $state->year }}">
                {{ $state->month ." ". $state->year }}
            </a>
        </li>
    @endforeach
</ul>