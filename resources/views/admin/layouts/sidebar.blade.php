<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-mini">
            <img src="{{ asset('favicon.png') }}" alt="NNB">
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
            <li class="{{ Nav::isRoute('departments.create') }}">
                <a href="{{ route('departments.create') }}">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Department</p>
                </a>
            </li>
            
            <li class="{{ Nav::isRoute('admin.create.doc') }}">
                <a href="{{ route('admin.create.doc') }}">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Upload Notice</p>
                </a>
            </li>
            
            <li class="{{ Nav::isRoute('admin.pending') }}">
                <a href="{{ route('admin.pending') }}">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    <p>Pending Notices</p>
                </a>
            </li>

            <li class="{{ Nav::isRoute('admin.show.docs') }}">
                <a href="{{ route('admin.show.docs') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Notices & Notification</p>
                </a>
            </li>

            <li class="{{ Nav::isRoute('admin.blocked.doc') }}">
                <a href="{{ route('admin.blocked.doc') }}">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                    <p>Blocked Notices</p>
                </a>
            </li>
            
            <li class="{{ Nav::isRoute('admin.inquiries') }}">
                <a href="{{ route('admin.inquiries') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Inquiries</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>