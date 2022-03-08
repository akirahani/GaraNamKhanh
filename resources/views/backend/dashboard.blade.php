@extends('backend.layouts.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
   
      <div class="card mt-3">
        <div class="card-content " >
            <div class="row row-group" >
                <div class=" col-12 col-lg-3 col-md-6"   >
                    <div class="card-body" style="background-color:#adb32e;">
                      <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                           <div class="progress-bar" style="width:55%"></div>
                        </div>
                      <p class="mb-0 text-white small-font">Lịch hẹn<span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                      
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="card-body" style="background-color: #f76111;">
                      <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                           <div class="progress-bar" style="width:55%"></div>
                        </div>
                      <p class="mb-0 text-white small-font">Doanh thu <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12"  >
                    <div class="card-body"  style="background-color:#119cf7;">
                      <h5 class="text-white mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                           <div class="progress-bar" style="width:55%"></div>
                        </div>
                      <p class="mb-0 text-white small-font">Số lượng xe đến gara <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12" >
                    <div class="card-body" style="background-color:#02ff1c4d;;">
                      <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                           <div class="progress-bar" style="width:55%"></div>
                        </div>
                      <p class="mb-0 text-white small-font">Khách hàng  <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
     </div>  
        
  
      
      <div class="row">
       <div class="col-12 col-lg-12">
         <div class="card">
           <div class="card-header">Phụ tùng được xuất nhiều nhất
          <div class="card-action">
                 <div class="dropdown">
                 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                  <i class="icon-options"></i>
                 </a>
                  <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="javascript:void();">Action</a>
                  <a class="dropdown-item" href="javascript:void();">Another action</a>
                  <a class="dropdown-item" href="javascript:void();">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void();">Separated link</a>
                   </div>
                  </div>
                 </div>
         </div>
             <div class="table-responsive">
                     <table class="table align-items-center table-flush table-borderless">
                      <thead>
                       <tr>
                         <th>Product</th>
                 
                         <th>Product ID</th>
                         <th>Amount</th>
                         <th>Date</th>
                         <th>Shipping</th>
                       </tr>
                       </thead>
                       <tbody><tr>
                        <td>Iphone 5</td>
                     
                        <td>#9405822</td>
                        <td>$ 1250.00</td>
                        <td>03 Aug 2017</td>
              <td><div class="progress shadow" style="height: 3px;">
                              <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                            </div></td>
                       </tr>
    
                       <tr>
                        <td>Earphone GL</td>
                     
                        <td>#9405820</td>
                        <td>$ 1500.00</td>
                        <td>03 Aug 2017</td>
              <td><div class="progress shadow" style="height: 3px;">
                              <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                            </div></td>
                       </tr>
    
                       <tr>
                        <td>HD Hand Camera</td>
                     
                        <td>#9405830</td>
                        <td>$ 1400.00</td>
                        <td>03 Aug 2017</td>
              <td><div class="progress shadow" style="height: 3px;">
                              <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                            </div></td>
                       </tr>
    
                       <tr>
                        <td>Clasic Shoes</td>
                     
                        <td>#9405825</td>
                        <td>$ 1200.00</td>
                        <td>03 Aug 2017</td>
              <td><div class="progress shadow" style="height: 3px;">
                              <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                            </div></td>
                       </tr>
    
                       <tr>
                        <td>Hand Watch</td>
                     
                        <td>#9405840</td>
                        <td>$ 1800.00</td>
                        <td>03 Aug 2017</td>
              <td><div class="progress shadow" style="height: 3px;">
                              <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                            </div></td>
                       </tr>
               
               <tr>
                        <td>Clasic Shoes</td>
                     
                        <td>#9405825</td>
                        <td>$ 1200.00</td>
                        <td>03 Aug 2017</td>
              <td><div class="progress shadow" style="height: 3px;">
                              <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                            </div></td>
                       </tr>
    
                     </tbody></table>
                   </div>            
    
    </div>
</div>
@endsection