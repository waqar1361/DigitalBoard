@yield('header')
<nav class="navbar navbar-expand-md shadow navbar-dark rounded mb-3">
    
    <a class="navbar-brand" data-toggle="tooltip" data-placement="bottom" href="/"
       title="National Notices Board">NNB</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navBar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Nav::isRoute('home') }} ">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ Nav::hasSegment('browse') }} ">
                <a class="nav-link" href="/browse">Browse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Admin</a>
            </li>
        </ul>
    </div>

</nav>