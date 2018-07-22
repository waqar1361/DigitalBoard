<li class="list-group-item text-capitalize">

    <strong>{{$item->name}}</strong>

    <ul class="m-0">
        @if(count($item->notices))
            <li>
                <a href="/documents?notices=true&dept={{urlencode($item->name)}}">notices</a>
                <span class="badge badge-dark badge-pill fa-pull-right">{{ $item->notices->count() }}</span>
            </li>
        @endif
        @if(count($item->notifications))
            <li>
                <a href="/documents?notifications=true&dept={{urlencode($item->name)}}">notifications</a>
                <span class="badge badge-dark badge-pill fa-pull-right">{{ $item->notifications->count() }}</span>
            </li>
        @endif
    </ul>

</li>