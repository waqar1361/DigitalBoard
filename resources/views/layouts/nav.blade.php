<nav class="navbar navbar-expand-md shadow navbar-dark bg-dark mb-3">
    {{--<div class="container">--}}
        <a class="navbar-brand logo" href="/" title="National Notices Board">NNB</a>
        @guest()
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/browse">Browse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Admin</a>
                </li>
            </ul>

        @endguest

        @auth()
            <div class="m-auto">
                <h2 class="text-light text-center">@yield('title')</h2>
            </div>
        @endauth
    {{--</div>--}}
</nav>
