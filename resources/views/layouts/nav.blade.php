<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/" >
                <img src="{{ asset('favicon.png') }}" alt="nnb" width="30" height="30" />
            </a>
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{config('app.image-path')}}">
            <ul class="navbar-nav">
                
                <li class="nav-item {{ Nav::isRoute('home') }} ">
                    <a class="nav-link" href="/">
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item {{ Nav::hasSegment('browse') }} ">
                    <a class="nav-link" href="/browse">Browse</a>
                </li>
                
                @auth('admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/dashboard">Admin</a>
                    </li>
                @endauth
                
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.home')}}">Dashboard</a>
                    </li>
                @endauth
                
                @guest()
                    @guest('admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Log In</a>
                        </li>
                    @endguest
                @endguest
            
            </ul>
        </div>
    </div>
</nav>