<ul class="nav bg-primary col-2 flex-column sidebar" id="sidebar">
    <h1 class="container-fluid text-light"><b>NNB</b>.<i>pk</i></h1>

    <li class="nav-item">
        <a class="nav-link" href="/admin">Main</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin/publish">Publish</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin/dept/list">Dept List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin/dept/new">Add Dept</a>
    </li>
    <li class="nav-item mt-auto">
        <a class="nav-link" href="{{ route('logout') }}" onclick="logout()" title="Logout">
            <span class="fa fa-sm fa-power-off"></span> Log Out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </li>
</ul>