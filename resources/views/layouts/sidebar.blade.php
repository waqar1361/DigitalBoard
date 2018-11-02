<section class="sideBar">
    <ul class="list-group pb-3">
        
        @if( count( Dept::depts('government') ) )
            <li class="card border-0">
                <h4 class="card-header">
                    <a href="#govt" data-toggle="collapse" aria-controls="govt" aria-expanded="true">
                        Government
                    </a>
                </h4>
                <div class="collapse show card-body" id="govt" data-parent=".card">
                    @foreach(Dept::depts('government') as $item)
                        @include('layouts.sidebar-item')
                    @endforeach
                </div>
            </li>
        @endif
        
        @if( count( Dept::depts('semi-government') ) )
            <li class="card border-0 text-center">
                <h4 class="card-header">
                    <a href="#semiGovt" class="text-light" data-toggle="collapse" aria-controls="semiGovt"
                       aria-expanded="false">
                        Semi Government
                    </a>
                </h4>
                <div class="collapse" id="semiGovt" data-parent=".card">
                    @foreach(Dept::depts('semi-government') as $item)
                        @include('layouts.sidebar-item')
                    @endforeach
                </div>
            </li>
        @endif
        
        @if( count( Dept::depts('Private') ) )
            <li class="card border-0 text-center">
                <h4 class="card-header">
                    <a href="#private" class="text-light" data-toggle="collapse" aria-controls="private"
                       aria-expanded="false">
                        Private
                    </a>
                </h4>
                <div class="collapse" id="private" data-parent=".card">
                    @foreach(Dept::depts('private') as $item)
                        @include('layouts.sidebar-item')
                    @endforeach
                </div>
            </li>
        @endif
    </ul>
    
    <hr>
    
    <h3 class="text-center">Archives</h3>
    <ul class="list-group px-3 pb-4">
        @foreach($years as $year)
            <li>
                <a href="#{{ $year->year }}" data-toggle="collapse" aria-controls="{{ $year->year }}"
                   aria-expanded="false">{{ $year->year }}</a>
                <span class="badge badge-dark badge-pill fa-pull-right">{{ $year->published }}</span>
                <ul id="{{ $year->year }}" class="collapse list-unstyled pl-2" data-parent=".state">
                    @foreach($archives as $state)
                        @if( $year->year == $state->year )
                            <li class="state">
                                <a href="/browse?month={{ $state->month }}&year={{ $state->year }}">
                                    {{ $state->month }}
                                </a>
                                <span class="badge badge-secondary badge-pill fa-pull-right">{{ $state->published }}</span>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</section>