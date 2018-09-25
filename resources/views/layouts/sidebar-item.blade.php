<li class="list-group-item text-capitalize">

    <strong class="text-primary">{{$item->name}}</strong>

    <ul class="m-0">
        @if(count($item->notices))
            <li>
                <a href="/browse?type=notice&dept={{urlencode($item->name)}}">notices</a>
                <span class="badge badge-success badge-pill fa-pull-right">{{ $item->notices->count() }}</span>
            </li>
        @endif
        @if(count($item->notifications))
            <li>
                <a href="/browse?type=notification&dept={{urlencode($item->name)}}">notifications</a>
                <span class="badge badge-success badge-pill fa-pull-right">{{ $item->notifications->count() }}</span>
            </li>
        @endif
    </ul>

</li>