<li class="list-group-item">

    <strong>{{$item->name}}</strong>

    <ul class="m-0">
        <li>
            <a href="/notices?dept={{$item->id}}">notices</a>
            <span class="badge badge-dark badge-pill fa-pull-right">{{ $item->notices->count() }}</span>
        </li>
        <li>
            <a href="/notifications?dept={{$item->id}}">notifications</a>
            <span class="badge badge-dark badge-pill fa-pull-right">{{ $item->notifications->count() }}</span>
        </li>
    </ul>

</li>