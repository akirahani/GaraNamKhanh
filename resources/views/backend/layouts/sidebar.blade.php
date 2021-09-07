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
      
                <li class="p-2"><h5>Quản lí chấm công</h5>
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
                <li class="p-2"><h5>Quản lí Gara</h5>
                  <li>
                      <a href="{{url('/admin/schedule')}}">
                        <i class="zmdi zmdi-calendar-alt"></i> <span>Quản lí xếp lịch</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('/admin/customer')}}">
                        <i class="zmdi zmdi-account"></i> <span>Thông tin khách hàng</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('/admin/repair')}}">
                          <i class="zmdi zmdi-assignment-o"></i><span>Quản lí lệnh sửa</span> 
                      </a>
                  </li>
                  <li>
                      <a  id="drop-down" href="{{url('/admin/spare')}}">
                        <i class="zmdi zmdi-wrench"></i><span>Lịch sử xuất phụ tùng</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('/admin/supplier')}}">
                         <i class="zmdi zmdi-accounts-list"></i><span>Quản lí nhà cung cấp</span>
                      </a>
                  </li> 
                  <li>
                      <a href="{{url('#')}}">
                        <i class="zmdi zmdi-car"></i> <span>Quản lí xe đến gara</span>
                      </a>
                  </li> 
                  <li>
                      <a href="{{url('#')}}">
                        <i class="zmdi zmdi-money"></i> <span>Quản lí thanh toán</span>
                      </a>
                  </li> 
                </li>
        
                  
             
              

            </ul>
</div>
<script>
    $('#drop-down').click(function(){
         $('#down-content').toggle();
      });
</script>