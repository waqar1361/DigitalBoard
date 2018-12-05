<footer class="card" id="test">
    
    <div class="row">
        
        <div class="col-md-3">
            <h3>Departments</h3>
            <hr>
            <ul class="list-unstyled text-capitalize">
                @foreach(Dept::all() as $dept)
                    <li>
                        <a href="browse?dept={{ $dept->name }}" data-toggle="tooltip" data-placement="bottom"
                           title="{{ $dept->full_name or $dept->name }}">{{$dept->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        
        <div class="col-md">
            <h3>Important Links</h3>
            <hr>
            <nav class="d-flex flex-column">
                <a href="/browse?type=notice">Notices</a>
                <a href="/browse?type=notification">Notifications</a>
                <a href="/support">Support</a>
                <a href="/faqs">FAQ's</a>
            </nav>
            <hr>
            
            <h4>Theme : </h4>
            
            <div class="btn-group form-group" role="group" aria-label="themes">
                <button id="light" type="button" @click="light" class="btn btn-light {{ $_COOKIE['theme'] == 'light' ?
                "disabled" : "" }}">Light
                </button>
                <button id="dark" type="button" @click="dark" class="btn btn-dark {{ $_COOKIE['theme'] == 'dark' ?
                "disabled" : "" }}">Dark
                </button>
            </div>
        
        </div>
    
    
    
        <div class="col-md accordion" id="archive">
            <h3>Archives</h3>
            <hr>
            @foreach($years as $year)
                <div>
                    <div id="{{$year->year}}">
                        <h5 title="Click to expand" >
                            <a role="button" data-toggle="collapse"
                                    href="#{{$year->year}}-body"
                                    aria-expanded="false"
                                    aria-controls="{{$year->year}}-body">
                                {{$year->year}}
                            </a>
                            <span class="badge badge-dark badge-pill fa-pull-right">{{ $year->published }}</span>
                        </h5>
                    </div>
                
                    <div id="{{$year->year}}-body" class="collapse" aria-labelledby="{{$year->year}}" data-parent="#archive">
                        {{--<div class="card-body">--}}
                            <ul class="list-unstyled">
                                @foreach($archives as $state)
                                    @if( $year->year == $state->year )
                                        <li>
                                            <a href="/browse?month={{ $state->month }}&year={{ $state->year }}">
                                                {{ $state->month }}
                                            </a>
                                            <span class="badge badge-secondary badge-pill fa-pull-right">{{ $state->published }}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        {{--</div>--}}
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="col-md-3">
            <h3>Follow Us</h3>
            <hr>
            <nav class="d-flex text-justify">
                <a class="py-0 px-1 brand rounded facebook nav-link" href="#"><span class="fab fa-3x fa-facebook"></span></a>
                <a class="py-0 px-1 brand rounded plus nav-link" href="#"><span class="fab fa-3x fa-google-plus-square"></span></a>
                <a class="py-0 px-1 brand rounded github nav-link" href="#"><span class="fab fa-3x fa-github-square"></span></a>
            </nav>
            
            <p>Developed By :<br> Mohammad Waqar</p>
            <p>Contact :<br> <a href="mailto:waqarqadri6@gmail.com">waqarqadri6@gmail.com</a></p>
        </div>
    </div>
    <hr>
    <p>&copy; {{ date("Y") }} All rights reserved. Our <a href="#">terms</a> and <a href="#">policy</a></p>
    <a id="toTop" class="fa" style="display: none"></a>
</footer>