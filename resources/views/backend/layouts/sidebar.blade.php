<div id="app">
  <div id="wrapper">
    <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">

          <div class="brand-logo">
              <a href="{{url('admin/report')}}">
                <img src="{{ asset('assets/images/logoors.png') }}" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Gara Admin</h5>
              </a>
            </div>

            <ul class="sidebar-menu do-nicescrol">
      
                <li><h5>Quản lí chấm công</h5>
                  <li>
                 
                      <a href="{{url('/admin/calendar')}}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Tạo lịch ngày nghỉ, lễ</span>
                        <small class="badge float-right badge-light">New</small>
                      </a>
                      </li>
                      <li>
                        <a href="{{ route('backend.member.view') }}">
                          <i class="fas fa-user-circle"></i> <span>Quản lý tài khoản</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('backend.shift.view') }}">
                          <i class="fas fa-scroll"></i> <span>Quản lý ca</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{url('/admin/report')}}">
                          <i class="fas fa-business-time"></i><span>Thống kê giờ công</span>
                        </a>
                      </li>
                 
                </li>
                <li><h5>Quản lí khách hàng</h5>
                  <li>
                      <a href="{{url('/admin')}}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Quản lí xếp lịch</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('/admin/customer')}}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Thông tin khách hàng</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('')}}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Quản lí thanh toán</span>
                      </a>
                  </li>
                </li>
                <li><h5>Quản lí phụ tùng, vật tư</h5>
                  <li>
                      <a href="{{url('')}}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Quản lí phụ tùng</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('')}}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Quản lí vật tư</span>
                      </a>
                  </li>
                </li>
              

            </ul>
</div>