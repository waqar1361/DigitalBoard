<ul class="nav bg-dark col-2 flex-column sidebar" id="sidebar">
    <h1 class="container-fluid text-light"><b>NNB</b>.<i>pk</i></h1>

    <li class="nav-item">
        <a class="nav-link" href="/admin">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/documents/create">Publish</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/departments">Dept List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/departments/create">Add Dept</a>
    </li>
    <li class="nav-item mt-auto">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" title="Logout">
            <span class="fa fa-sm fa-power-off"></span> Log Out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </li>
</ul>