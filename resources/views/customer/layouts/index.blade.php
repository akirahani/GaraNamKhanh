<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/> -->
  <link rel="icon" href='https://ouransoft.vn/upload/logo-ouransoft.png' type="image/x-icon">

  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
<link rel="stylesheet" href="{{asset('assets/css/customer.css')}}">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<body>

  @include('customer.layouts.header')

  <!-- @include('customer.layouts.banner') -->
  <div class="break_line-all"> </div>
  <main class="all-content" style="background-color: #f9f9f9">
  <br><br><br>
  <br><br><br>
  <div class="card card-style" style="background-color: " >
          <div class="content mb-0">
            <h1 class="text-center1 mb-0">Packed with Goodies</h1>
                <div class="divider">
                  <div class="break_line"> </div>
                </div>
          </div>
          <div class="row atk ">
            <div class="service col-6 text-center1">
              <a href ="{{url('/customer/detail/mantain')}}">
                <span class="fa-stack fa-2x" id="card-in-service">
                    <i class="fas fa-circle fa-stack-2x text-red"></i>
                        <!-- <i class="fas fa-car fa-stack-1x text-white"></i> -->
                    <i class="fas fa-tools fa-stack-1x text-white"></i>
                </span>
                <h2 class="mt-3 mb-1">Đặt lịch sửa chữa</h2>
                <p>Built to last, with the latest quality code</p>
              </a>  
            </div>
            <div class="service col-6 text-center1">
                <span class="fa-stack fa-2x" id="card-in-service">
                      <i class="fas fa-circle fa-stack-2x text-red"></i>
                      <i class="fas fa-toolbox fa-stack-1x text-white"></i>
                </span>
              <h2 class="mt-3 mb-1">Đặt lịch bảo dưỡng</h2>
              <p>Speed, Features and Flexibility all in One!</p>
            </div>
            <div class="service  col-6 text-center1">
              <span class="fa-stack fa-2x" id="card-in-service">
                  <i class="fas fa-circle fa-stack-2x text-red"></i>
                  <i class="fas fa-user-clock fa-stack-1x text-white"></i>
                </span>
              <h2 class="mt-3 mb-1">Chăm sóc khách hàng</h2>
              <p>Customers love our work for it's ease.</p>
            </div>
            <div class="service col-6 text-center1">
               <span class="fa-stack fa-2x" id="card-in-service">
                  <i class="fas fa-circle fa-stack-2x text-red"></i>
                  <i class="fas fa-money-bill-wave fa-stack-1x text-white"></i>
                </span>
              <h2 class="mt-3 mb-1">Thanh toán</h2>
              <p>We treat others like we want to be treated.</p>
            </div>
          
           
            
          </div>
      </div>

      @include('customer.layouts.taskbar')
  </main>
  
  @include('customer.response')
<script src="{{asset('assets/js/jquery_customer.js')}}"></script>

</body>
 