<nav class="navbar navbar-expand-md shadow navbar-dark rounded my-3">
    
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
            
            @auth('admin')
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">Dashboard</a>
                </li>
            @endauth
            
            @guest('admin')
                <li class="nav-item">
                    <a class="nav-link" href="/admin/login">Admin</a>
                </li>
            @endguest
        
        </ul>
    </div>

</nav>