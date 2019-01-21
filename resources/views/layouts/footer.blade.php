<footer class="footer mt-5" data-background-color="black">
    
    <div class="container">
        <div class="row">
            
            <div class="col-md">
                <h3>Important Links</h3>
                
                <ul class="d-flex flex-column text-md-left text-center">
                    <h5><a href="/browse?type=notice">Notices</a></h5>
                    <h5><a href="/browse?type=notification">Notifications</a></h5>
                    <h5><a href="/support">Support</a></h5>
                    <h5><a href="/faqs">FAQ's</a></h5>
                </ul>
            </div>
            <div class="col"></div>
            <div class="col-md-2 accordion" id="archive">
                <h3 class="text-center">Archives</h3>
                
                @foreach($years as $year)
                    <div class="text-justify">
                        <div id="{{$year->name}}">
                            <h5 title="Click to expand">
                                <a role="button" data-toggle="collapse"
                                   href="#{{$year->name}}-body"
                                   aria-expanded="false"
                                   aria-controls="{{$year->name}}-body">
                                    {{$year->name}}
                                </a>
                                <span class="badge badge-dark badge-pill fa-pull-right">{{ $year->published }}</span>
                            </h5>
                        </div>
                        
                        <div id="{{$year->name}}-body" class="collapse" aria-labelledby="{{$year->name}}" data-parent="#archive">
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach($archives as $state)
                                        @if( $year->name == $state->year )
                                            <li class="">
                                                <a href="/browse?month={{ $state->month }}&year={{ $state->year }}">
                                                    {{ $state->month }}
                                                </a>
                                                <span class="badge fa-pull-right">{{ $state->published }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        
        </div>
        
        <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
                <h3>Thank you for supporting us!</h3>
            </div>
            <div class="text-center col-md-12 col-lg-8">
                <a target="_blank" href="javascript:void(0)" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg"
                   rel="tooltip"
                   title="Follow us">
                    <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="javascript:void(0)" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg"
                   rel="tooltip"
                   title="Like us">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a target="_blank" href="javascript:void(0)" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round"
                   rel="tooltip"
                   title="Follow us">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a target="_blank" href="javascript:void(0)" class="btn btn-neutral btn-icon btn-google btn-lg btn-round"
                   rel="tooltip"
                   title="Follow us">
                    <i class="fab fa-google"></i>
                </a>
                <a target="_blank" href="javascript:void(0)" class="btn btn-neutral btn-icon btn-github btn-round btn-lg"
                   rel="tooltip"
                   title="Star on Github">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
    
    </div>
    <hr>
    <p class="text-center m-0">
        &copy; {{ date("Y") }}, All rights reserved by {{ config('app.name') }}. Developed By
        <a href="mailto:waqarqadri6@gmail.com">Muhammad Waqar</a>, Group # 17,
        <a href="http://www.giccl.edu.pk/">Govt. Islamia College</a> Civil Lines LHR.
    </p>
    <!-- todo : developed By group & back to top-->
    <a id="toTop" class="fa" style="display: none"></a>
</footer>