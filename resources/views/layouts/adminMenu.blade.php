<ul class="nav bg-dark col-2 flex-column sidebar" id="sidebar">
    <h1 class="container-fluid text-light"><b>NNB</b>.<i>pk</i></h1>

    <li class="nav-item" title="Main Screen">
        <a class="nav-link" href="/admin">Main</a>
    </li>
    <li class="nav-item" title="Publish new Notice/Notification">
        <a class="nav-link" href="/documents/create">Publish</a>
    </li>
    <li class="nav-item" title="Add New Department">
        <a class="nav-link" href="/departments/create">Add Department</a>
    </li>
    <li class="nav-item" title="View all departments">
        <a class="nav-link" href="/departments">Departments</a>
    </li>

    <li class="nav-item mt-auto">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" title="Logout">
            <span class="fas fa-power-off"> Log Out</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </li>
</ul>