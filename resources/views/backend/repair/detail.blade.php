<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Nam Khánh Gara</title>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel='stylesheet' />
<body class="bg-theme bg-theme2">
<div class="container all-detail-repair" style="background-color:white" >
    <div style="text-align:center">
        <h3  style="color:black;padding-top:3%" >LỆNH SỬA</h3>
    </div>
    <div style="margin-left:60%; font-size: 20px; padding: 1%; color:black;"   >Thời gian tạo : {{$repairs->created_at}}</div>
        <h3 style="text-align: center; color:black;">GARA Ô TÔ NAM KHÁNH</h3>
        <h5 style="color:black;">SĐT liên hệ: 0985.984.162 -0906.165.379 </h5>
        <br>
        <h5 style=" color:black;">Địa chỉ: số 25 lô 16D Lê Hồng Phong- Hải An- HP </h5>
    <br>
    <div class="container as-detail">
        <div class="row repairs_insert_main ">
            @foreach($repairs->customer->car as $car)
                <table class="table" style="border: 1px solid ">
                <input value="{{$repairs->id}}" disabled hidden>
                    <tr>
                        <th scope="col" style="border: 1px solid ;color:black;">
                            Họ & Tên: 
                            {{$repairs->customer->name}}
                        </th>
                        <th scope="col" style="border: 1px solid ;color:black;">
                            Biển số xe:
                            {{$car->license_plate}}
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" style="border: 1px solid ;color:black;">
                            Địa chỉ:
                            {{$repairs->customer->address}}
                        </th>
                        <th scope="col" style="border: 1px solid ;color:black;">
                            Loại xe:
                            {{$car->type_car->vehicles}}- {{$car->type_car->name_type}} 
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" style="border: 1px solid ;color:black;">
                            Số điện thoại:
                            {{$repairs->customer->phone}}
                        </th>
                        <th scope="col" style="border: 1px solid ;color:black;">
                            Năm sản xuất:
                            {{$car->year_manufacture}}
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" style="border: 1px solid ;color:black;">
                            Công ty bảo hiểm:
                            {{$car->company->name}}
                        </th>
                        <th scope="col" style="border: 1px solid ;color:black;">
                            Người giám định:
                        {{$repairs->assessor}}
                        </th>
                    </tr>
                </table>           
            @endforeach
        </div>
    </div>
        
            <hr>
            <div class="all-ws row">
                            <div class="col-5 p-3" >
                                <div class="label-input">
                                    <label for="input-2"  style="color:black;">Công việc</label>
                                </div>    
                                <div class="content-work">
                                    <table class="table" style="border: 1px solid ">
                                        <tr>
                                            <th style="border: 1px solid ; color:black;">Tên công việc</th>
                                            <th style="border: 1px solid ;color:black;">Tiền công</th>
                                        </tr>
                                
                                         @foreach($repairs->work as $work)
                                                <tr>
                                        
                                                    <td style="border: 1px solid ;color:black;">{{$work->name_work}} </td>
                                                    <td style="border: 1px solid ;color:black;">{{$work->wage}}</td>
                                                </tr>
                                        @endforeach                                      
                                    </table>
                                </div>
                            </div>
                        
                            <div class="col-7 p-3">
                                    <div class="label-input">
                                        <label for="input-2" style="color:black;">Phụ tùng</label>
                                    </div>    
                                    <div class="content-sparepart">
                                    <table class="table" style="border: 1px solid ">
                                        <tr>
                                            <th scope="col" style="border: 1px solid ;color:black;" >Tên phụ tùng</th>
                                            <th scope="col" style="border: 1px solid ;color:black;" >ĐVT</th>
                                            <th scope="col" style="border: 1px solid ;color:black;">SL</th>
                                            <th scope="col" style="border: 1px solid ;color:black;">Đơn giá</th>
                                            <th scope="col" style="border: 1px solid ;color:black;">Thành tiền</th>
                                        </tr>
                                      
                                        @foreach($repairs->out as $out)
                                 
                                        <tr>
                                            <td style="border: 1px solid;color:black; " >{{$out->dout->dspare->name_spare}}- {{$out->dout->dsupplier->name}}- {{$out->dout->dtype->serial}}-{{$out->dout->dtype->model}}</td>
                                            <td style="border: 1px solid;color:black; " >{{$out->dout->dspare->unit}}</td>
                                     
                                            <td style="border: 1px solid;color:black; ">{{$out->amount_out}} </td>
                                          
                                            <td style="border: 1px solid;color:black; ">{{$out->unit_price}}</td>
                                          
                                            <td style="border: 1px solid;color:black; ">{{$out->total_price}} </td>        
                                        
                                        </tr>
                                     
                                         @endforeach  

                           
                                    </table>    
                                    </div>
                            </div>
            </div>   
            <button class="btn btn-info" style="margin-left:90%"onclick="window.print()"><i class="fas fa-print" style="font-size:25px"></i></button>  
</div>    
</body>