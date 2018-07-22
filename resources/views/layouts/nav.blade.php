<nav class="navbar navbar-expand-md shadow navbar-dark bg-dark mb-3">
<div class="container">
    @guest()
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/"><span class="fa fa-lg fa-home"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/documents?notices=true">Notices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/documents?notifications=true">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
            </li>
        </ul>
        <div class="ml-auto">
            <a class="btn btn-secondary" href="/login">Admin</a>
        </div>

    @endguest

    @auth()
        <div class="m-auto">
            <h2 class="text-light text-center">@yield('title')</h2>
        </div>
    @endauth
</div>
</nav>
