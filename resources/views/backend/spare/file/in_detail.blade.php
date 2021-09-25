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
        <h3  style="color:black;padding-top:3%" >Phiếu nhập</h3>
    </div>
    <div class="col-lg-12">
    <form action="{{url('/admin/file/in/import')}}" method="POST" >
    @csrf
        <div class="card">
        <div class="card-body container"> 
                <input name="id_filein" value="{{$file_in->id}}" class="form-control" required hidden>
                <div class="row work_main mx-auto p-3">           
                </div>   
                    <table class="table">
                        <thead>
                            <tr>
                                <th  style="border: 1px solid ;color:black" >Nội dung</th>
                                <th  style="border: 1px solid;color:black " >Đơn vị tính</th>                       
                                <th  style="border: 1px solid;color:black " >Giá nhập</th> 
                                <th  style="border: 1px solid ;color:black" >Số lượng nhập</th> 
                                <!-- <th  style="border: 1px solid ;color:black" >Thành tiền</th>  -->
                            </tr>
                        </thead>  
                        <tbody>
                            @foreach($file_in->fin_spare as $val)
                   
                                <tr>
                                    <td  style="border: 1px solid;color:black " >
                                        <input name="id_sparein[]" class="form-control" value="{{$val->id}}" hidden>
                                        {{$val->dspare->name_spare}}- {{$val->dsupplier->name}}- {{$val->dspare->serial}}- {{$val->dspare->model}}   
                                    </td>
                                
                                    <td  style="border: 1px solid;color:black " >{{$val->dspare->unit}}</td>
                                    <td  style="border: 1px solid;color:black " >
                                        <input name="price_in[]" value="{{$val->dspare->price}}" class="form-control" required readonly>
                                    </td>
                                    <td  style="border: 1px solid;color:black " >
                                    @if($file_in->status == \App\FileIn::wait['id'])
                                        <input name="amount_in[]" class="form-control" required>
                                    @endif
                                    </td>
                                 
                                </tr>
                         
                            @endforeach
                        </tbody>
                    </table>      
                </div>
                <!-- <button class="btn btn-info" style="margin-left:90%"onclick="window.print()"><i class="fas fa-print" style="font-size:25px"></i></button>   -->
            </div>
            <div class="tab" style="margin-left:90%">
                @if($file_in->status == \App\FileIn::wait['id'])
                <button class="btn btn-warning" type="submit" >  <i class="fas fa-file-import"  style="font-size:25px"></i></button>
                @endif
            </div>
        </form> 
    </div>
 
</div>