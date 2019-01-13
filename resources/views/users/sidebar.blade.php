<aside class="main-sidebar">
    
    <section class="sidebar">
        
        
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/storage{{ auth()->user()->profile }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <h4 class="text-capitalize">{{ auth()->user()->name }}</h4>
                <!-- Status -->
                {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
            </div>
        </div>
        
        
        <ul class="sidebar-menu" data-widget="tree">
            
            <li class="{{ Nav::isRoute('users.home') }}">
                <a href="{{route('users.home')}}">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            
            <li class="{{ Nav::isRoute('users.departments') }}">
                <a href="{{route('users.departments')}}">
                    <i class="fa fa-folder"></i> <span>Departments</span>
                </a>
            </li>
            
            <li class="{{ Nav::isRoute('users.bookmarks') }}">
                <a href="{{route('users.bookmarks')}}">
                    <i class="fa fa-bookmark"></i> <span>Bookmarks</span>
                </a>
            </li>
            
        
        </ul>
    
    </section>

</aside>