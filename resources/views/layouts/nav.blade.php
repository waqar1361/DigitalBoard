<nav class="navbar navbar-expand-md navbar-dark bg-primary">

    @if(auth()->guest())

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="btn btn-secondary" href="/"><span class="fa fa-lg fa-home"></span></a>
            </li>
        </ul>
        <div class="ml-auto">
            <a class="btn btn-secondary" href="/search"><span class="fa fa-lg fa-search"></span></a>
            <a class="btn btn-secondary" href="/login">Admin</a>
        </div>


    @endif

    @if(auth()->check())
        <div class="m-auto">
            <h2 class="text-light text-center">@yield('title')</h2>
        </div>
    @endif

</nav>
