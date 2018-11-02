<div class="text-capitalize pb-0">

    <strong>{{$item->name}}</strong>

    <ul class="list-unstyled ml-3">
        @if(count($item->notices))
            <li>
                <a href="/browse?type=notice&dept={{urlencode($item->name)}}">notices</a>
                <span class="badge badge-secondary badge-pill fa-pull-right">{{ $item->notices->count() }}</span>
            </li>
        @endif
        @if(count($item->notifications))
            <li>
                <a href="/browse?type=notification&dept={{urlencode($item->name)}}">notifications</a>
                <span class="badge badge-secondary badge-pill fa-pull-right">{{ $item->notifications->count() }}</span>
            </li>
        @endif
    </ul>

</div>