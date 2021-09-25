<div id="app">
  <div id="wrapper">
    <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">

          <div class="brand-logo">
              <a href="{{url('admin/report')}}">
                <img src="{{ asset('assets/images/namkhanh_logo.jpg') }}" class="logo-icon" alt="logo icon">
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
                <li >   
                         <ul style="list-style:none; display:flex ; padding:1%">
                           <li style=" padding:1%"> <i class="fas fa-warehouse"></i></li>
                           <li style=" padding:1%"><span><h5>Quản lí Gara</h5></span></li>
                         </ul> 
                        
                  <li>
                      <a  href="#down-content2"  data-toggle="collapse" >
                        <i class="zmdi zmdi-calendar-alt"></i> <span>Quản lí xếp lịch</span> <i class="fa fa-caret-down" style="margin-left:22%;"></i>
                     
                      </a>
                      <li id="down-content2" class="collapse" style="margin-left:10%;">
                            <a href="{{url('/admin/schedule')}}">
                              <i class="zmdi zmdi-undo"></i> <span>Phản hồi đặt lịch</span>
                            </a>
                            <a >
                              <i class="zmdi zmdi-redo"></i> <span>Nhắc lịch bảo dưỡng</span>
                            </a>
                        </li>
                  </li>
                  <li>
                      <a href="#down-content1" data-toggle="collapse">
                        <i class="zmdi zmdi-car"></i>
                        <span>Quản lí xe</span>  <i class="fa fa-caret-down" style="margin-left:10%;"></i>
                      </a>
                          <li id="down-content1" class="collapse" style="margin-left:10%;">
                            <a href="{{url('/admin/car/index')}}">
                              <i class="fas fa-info-circle"></i> <span>Thông tin xe</span>
                            </a>
                            <a href="{{url('/admin/car/type/index')}}">
                              <i class="fas fa-list-ol"></i><span>Loại xe</span>
                            </a>
                          </li>
                  </li> 
                  <li>
                      <a href="{{url('/admin/car/company/index')}}">
                        <i class="fas fa-location-arrow"></i><span>Công ty bảo hiểm</span>
                      </a>
                  </li> 
                  <li>
                      <a href="{{url('/admin/customer')}}">
                        <i class="zmdi zmdi-account"></i> <span>Thông tin khách hàng</span>
                      </a>
                  </li>
                  <li>
                      <a  href="{{url('/admin/spare/base')}}"  >
                        <i class="fas fa-cogs"></i>
                        <span>QL phụ tùng</span> 
                      </a>

                  </li>
                  <li>
                            <a href="{{url('/admin/supplier')}}">
                              <i class="zmdi zmdi-accounts-list"></i><span>Quản lí nhà cung cấp</span>
                            </a>      
                          </li>
                  <li>
                      <a  href="#down-content" data-toggle="collapse" class="drop-down">
                        <i class="fas fa-boxes"></i>
                        <span>QL kho</span>  <i class="fa fa-caret-down" style="margin-left:45%;"></i>
                      </a>
                          <li id="down-content" class="collapse" style="margin-left:10%;">
                              <a href="{{url('/admin/spare/exist')}}">
                                <i class="fas fa-dolly-flatbed"></i> <span>Tồn kho</span>
                              </a>
                              <a href="{{url('/admin/file/out')}}">
                                <i class="fas fa-file-export"></i>  <span>Phiếu xuất</span>
                              </a>
                              <a href="{{url('/admin/spare/out')}}">
                                <i class="zmdi zmdi-redo"></i> <span>Lịch sử xuất</span>
                              </a>
                              <a href="{{url('/admin/file/in')}}">
                                <i class="fas fa-file-import"></i> <span>Phiếu nhập</span>
                              </a>
                              <a href="{{url('/admin/spare/in')}}" id ="drop-down-on">
                                  <i class="zmdi zmdi-undo"></i> <span>Lịch sử nhập </span>
                              </a> 
                          </li>
                  </li>
                  <li>

                      <a  href="#down-content3" data-toggle="collapse">
                        <i class="far fa-list-alt"></i>
                        <span>QL dịch vụ</span>  <i class="fa fa-caret-down"  style="margin-left:35%;"></i>
                      </a>
                          <li id="down-content3" class="collapse" style="margin-left:10%;">
                            <a href="{{url('/admin/spare/search/index')}}">
                              <i class="fas fa-search-dollar"></i> <span>Tham khảo</span>
                            </a>
                            <a href="{{url('/admin/detailws/index')}}">
                              <i class="fas fa-clipboard-check"></i><span>Chi tiết PT và Công việc</span>
                            </a>
                            <a href="{{url('/admin/response/index')}}">
                              <i class="fas fa-reply-all"></i><span>Báo giá</span>
                            </a>
                            <a href="{{url('/admin/repair')}}">
                              <i class="zmdi zmdi-assignment-o"></i><span>Quản lí lệnh sửa</span> 
                            </a>
                          </li>
                     
                  </li>
                 
                  <li>
                      <a href="">
                        <i class="zmdi zmdi-money"></i> <span>Quản lí thanh toán</span>
                      </a>
                  </li>
              
                </li>

        
                  
             
              

            </ul>
</div>