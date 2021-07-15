<div id="app">
  <div id="wrapper">
    <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">

            <div class="brand-logo">
              <a href="{{route('admin.home')}}">
                <img src="{{ asset('assets/images/logoors.png') }}" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Gara Admin</h5>
              </a>
            </div>

            <ul class="sidebar-menu do-nicescrol">
              <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                  <a href="{{route('admin.home')}}">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                  </a>
                </li>

         

                <li>
                  <a href="{{url('/admin/calendar')}}">
                    <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                    <small class="badge float-right badge-light">New</small>
                  </a>
                </li>

                <!-- <li>
                  <a href="{{url('/admin/attendance')}}">
                    <i class="zmdi zmdi-long-arrow-up"></i> <span>Attendance</span>
                  </a>
                </li> -->

              <li>
                <a href="{{ route('backend.member.view') }}">
                  <i class="zmdi zmdi-long-arrow-up"></i> <span>Quản lý tài khoản</span>
                </a>
              </li>
              <li>
                <a href="{{ route('backend.shift.view') }}">
                  <i class="zmdi zmdi-long-arrow-up"></i> <span>Quản lý ca</span>
                </a>
              </li>
              <li>
                  <a href="{{url('/admin/report')}}">
                    <i class="zmdi zmdi-long-arrow-up"></i> <span>Reports</span>
                  </a>
                </li>

            </ul>
</div>