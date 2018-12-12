<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-mini">
            <img src="{{ asset('logo.jpg') }}" alt="NNB">
        </a>
        <a href="{{url('/')}}" class="simple-text logo-normal" data-toggle="tooltip" data-placement="bottom"
           title="{{config('app.name')}}">NationalNoticeBoard</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Nav::isRoute('admin.home') }}">
                <a href="{{ route('admin.home') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Nav::isRoute('admin.create.dept') }}">
                <a href="{{ route('admin.create.dept') }}">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Department</p>
                </a>
            </li>
            <li class="{{ Nav::isRoute('admin.create.doc') }}">
                <a href="{{ route('admin.create.doc') }}">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Notice / Notification</p>
                </a>
            </li>
            <li class="{{ Nav::isRoute('admin.faqs') }}">
                <a href="{{ route('admin.faqs') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>FAQ's</p>
                </a>
            </li>
    
    
     
            <li class="active-pro">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" title="Logout">
                    <i class="now-ui-icons media-1_button-power"></i>
                    <p>Logout</p>
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
    
            </li>
        </ul>
    </div>
</div>