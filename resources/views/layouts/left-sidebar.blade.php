<ul class="list-group">

    <li class="list-group-item bg-dark text-center">
        <a href="#govt" class="text-light" data-toggle="collapse" aria-controls="govt" aria-expanded="true">
            Government
        </a>
    </li>
    <div class="collapse show" id="govt" data-parent=".list-group">
        @foreach($dept::depts('govt') as $item)
            @include('layouts.sidebar-item')
        @endforeach
    </div>

    @if( count( $dept::depts('semi-govt') ) )
        <li class="list-group-item bg-dark text-center">
            <a href="#semiGovt" class="text-light" data-toggle="collapse" aria-controls="semiGovt" aria-expanded="false">
                Semi Government
            </a>
        </li>
        <div class="collapse" id="semiGovt" data-parent=".list-group">
            @foreach($dept::depts('semi-govt') as $item)
                @include('layouts.sidebar-item')
            @endforeach
        </div>
    @endif

    @if( count( $dept::depts('Private') ) )
        <li class="list-group-item bg-dark text-center">
            <a href="#private" class="text-light" data-toggle="collapse" aria-controls="private" aria-expanded="false">
                Private
            </a>
        </li>
        <div class="collapse" id="private" data-parent=".list-group">
            @foreach($dept::depts('private') as $item)
                @include('layouts.sidebar-item')
            @endforeach
        </div>
    @endif
</ul>