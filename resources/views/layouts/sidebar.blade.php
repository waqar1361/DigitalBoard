<section class="bg-dark sideBar">
    <ul class="list-group pb-3">
        
        <li class="card border-0 text-center">
            <h4 class="card-header">
                <a href="#govt" data-toggle="collapse" aria-controls="govt" aria-expanded="true">
                    Government
                </a>
            </h4>
        </li>
        <div class="collapse show" id="govt" data-parent=".list-group">
            @foreach(Dept::depts('government') as $item)
                @include('layouts.sidebar-item')
            @endforeach
        </div>
        
        @if( count( Dept::depts('semi-government') ) )
            <li class="card border-0 text-center">
                <h4 class="card-header">
                    <a href="#semiGovt" class="text-light" data-toggle="collapse" aria-controls="semiGovt"
                       aria-expanded="false">
                        Semi Government
                    </a>
                </h4>
            </li>
            <div class="collapse" id="semiGovt" data-parent=".list-group">
                @foreach(Dept::depts('semi-government') as $item)
                    @include('layouts.sidebar-item')
                @endforeach
            </div>
        @endif
        
        @if( count( Dept::depts('Private') ) )
            <li class="card border-0 text-center">
                <h4 class="card-header">
                    <a href="#private" class="text-light" data-toggle="collapse" aria-controls="private"
                       aria-expanded="false">
                        Private
                    </a>
                </h4>
            </li>
            <div class="collapse" id="private" data-parent=".list-group">
                @foreach(Dept::depts('private') as $item)
                    @include('layouts.sidebar-item')
                @endforeach
            </div>
        @endif
    </ul>
    
    <hr>
    
    <ul class="list-group px-3 pb-4">
    <h3 class="text-center text-primary">Archives</h3>
        @foreach($years as $year)
            <li>
                <a href="#{{ $year->year }}" data-toggle="collapse" aria-controls="{{ $year->year }}"
                   aria-expanded="false">{{ $year->year }}</a>
                <span class="badge badge-primary badge-pill fa-pull-right">{{ $year->published }}</span>
            </li>
            <ul id="{{ $year->year }}" class="collapse list-unstyled pl-2" data-parent=".state">
                @foreach($archives as $state)
                    @if( $year->year == $state->year )
                        <li class="state">
                            <a href="/browse?month={{ $state->month }}&year={{ $state->year }}">
                                {{ $state->month }}
                            </a>
                            <span class="badge badge-success badge-pill fa-pull-right">{{ $state->published }}</span>
                        </li>
                    @endif
                @endforeach
            </ul>
        @endforeach
    </ul>
</section>