@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body"> 
            <form action="{{url('/admin/spare/in/insert')}}" method="POST">
            @csrf
                <div class="row work_main mx-auto p-3">
                            <div class="col-3">
                            <input name="id_pn" type="text" readonly value="{{$price_notis->id}}" class="form-control form-control-rounded" hidden id="input-2">
                                <div class="label-input">
                                    <label for="input-2">Tên khách hàng</label>
                                </div>    
                                <div class="insert information">
                                    <input name="" type="text" readonly value="{{$price_notis->customer->name}}" class="form-control form-control-rounded" id="input-2">
                                </div>   
                            </div>
                            @foreach($price_notis->customer->car as $car)
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
                                    <input name="" type="text" readonly value="{{$price_notis->customer->address}}" class="form-control form-control-rounded" id="input-2">
                                </div>   
                            </div>
                            <div class="col-3">
                                <div class="label-input">
                                    <label for="input-2">Số điện thoại</label>
                                </div>    
                                <div class="insert information">
                                    <input name="" type="text" readonly  value="{{$price_notis->customer->phone}}" class="form-control form-control-rounded" id="input-2">
                                </div>   
                            </div>
                        
                            <div class="col-4 p-3" >
                                <div class="label-input">
                                    <label for="input-2">Công việc</label>
                                </div>    
                                <div class="content-work">
                                    <table class="table" style="border: 1px solid ">
                                        <tr>
                                            <th style="border: 1px solid ">Tên công việc</th>
                                            <th style="border: 1px solid ">Tiền công</th>
                                        </tr>
                                
                                            @foreach($price_notis->work as $work)
                                                <tr>
                                                <input value="{{$work->id}}" name="id_work[]" hidden>
                                                    <td style="border: 1px solid ">{{$work->name_work}} </td>
                                                    <td style="border: 1px solid ">{{$work->wage}}</td>
                                                </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
                        
                                <div class="col-8 p-3">
                                    <div class="label-input">
                                        <label for="input-2">Phụ tùng</label>
                                    </div>    
                                    <div class="content-sparepart">
                                    <table class="table" style="border: 1px solid ">
                                        <tr>
                                            <th scope="col" style="border: 1px solid " >Tên phụ tùng</th>
                                            <th scope="col" style="border: 1px solid ">Số lượng</th>
                                            <th scope="col" style="border: 1px solid ">Đơn giá</th>
                                            <th scope="col" style="border: 1px solid ">Thành tiền</th>
                                        </tr>
                                        @foreach($price_notis->spare as $spare)
                                            <tr>
                                                <input value="{{$spare->id}}" name="id_spare[]" hidden>
                                                <td style="border: 1px solid " >{{$spare->dspare->name_spare}}- {{$spare->dsupplier->name}}- {{$spare->dtype->serial}}-{{$spare->dtype->model}} </td>
      
                                                <td style="border: 1px solid "><input name="amount[]" class="form-control" type="number" min="1" max="" value=""  required ></td>
      
                                                <td style="border: 1px solid "><input name="price_in[]" class="form-control" type="number"  max="{{$spare->price_reference}}" value="{{$spare->price_reference}}"  ></td>
                                                
                                                <td style="border: 1px solid "></td>        
                                            </tr>
                                        @endforeach
                                    </table>    
                                    </div>
                                </div>
                                <div class="col-12 p-3">
                                    @if(\App\PriceNotification::status_success['id'] == $price_notis->status)
                                        <input class="btn btn-warning" id="submit" type="submit" value="Nhập" style="margin-left:90%;"  >
                                    @endif
                                </div>
                             

                         
                  
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection