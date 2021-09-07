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
<div class="container all-detail-repair" style="background-color:#ddd" >
    
<div class="row" style="margin-top:10%; font-color:black">
    <div style="text-align:center">
        <h3  style="color:black;padding-top:3%" >Phiếu xuất</h3>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body container"> 
                <div class="row work_main mx-auto p-3">
                            <div class="col-3">
                            <input name="id_pn" type="text" readonly value="{{$pns->id}}" class="form-control form-control-rounded" hidden id="input-2">
                                <div class="label-input">
                                    <label for="input-2">Tên khách hàng</label>
                                </div>    
                                <div class="insert information">
                                    <input name="" type="text" readonly value="{{$pns->customer->name}}" class="form-control form-control-rounded" id="input-2">
                                </div>   
                            </div>
                            @foreach($pns->customer->car as $car)
                            <div class="col-3">
                                <div class="label-input">
                                    <label for="input-2">Biển số xe</label>
                                </div>    
                                <div class="insert information">
                                    <input name="" type="text" readonly value="{{$car->license_plate}}" class="form-control form-control-rounded" id="input-2">
                                </div>   
                            </div>
                            @endforeach
                            <div class="col-3">
                                <div class="label-input">
                                    <label for="input-2">Địa chỉ</label>
                                </div>    
                                <div class="insert information">
                                    <input name="" type="text" readonly value="{{$pns->customer->address}}" class="form-control form-control-rounded" id="input-2">
                                </div>   
                            </div>
                            <div class="col-3">
                                <div class="label-input">
                                    <label for="input-2">Số điện thoại</label>
                                </div>    
                                <div class="insert information">
                                    <input name="" type="text" readonly  value="{{$pns->customer->phone}}" class="form-control form-control-rounded" id="input-2">
                                </div>   
                            </div>
                </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th  style="border: 1px solid ;color:black" >Nội dung</th>
                                <th  style="border: 1px solid;color:black " >Đơn vị tính</th>
                                <th  style="border: 1px solid ;color:black" >Số lượng xuất</th> 
                                <th  style="border: 1px solid;color:black " >Giá xuất</th> 
                                <th  style="border: 1px solid ;color:black" >Thành tiền</th> 
                            </tr>
                        </thead>  
                     @foreach($pns->out as $out)  
                        <tbody>
                            <tr>
                                <td  style="border: 1px solid;color:black " >{{$out->dout->dspare->name_spare}}- {{$out->dout->dsupplier->name}}- {{$out->dout->dtype->serial}}-{{$out->dout->dtype->model}}</td>
                                <td  style="border: 1px solid;color:black " >{{$out->dout->dspare->unit}}</td>
                                <td  style="border: 1px solid;color:black " >{{$out->amount_out}}</td> 
                                <td  style="border: 1px solid;color:black " >{{$out->unit_price}}</td>
                                <td  style="border: 1px solid;color:black " >{{$out->total_price}}</td>
                            </tr>
                    
                        </tbody>
                        @endforeach
                    </table>    
                </div>
                <button class="btn btn-info" style="margin-left:90%"onclick="window.print()"><i class="fas fa-print" style="font-size:25px"></i></button>  
            </div>
        </div>
     
</div>
      
