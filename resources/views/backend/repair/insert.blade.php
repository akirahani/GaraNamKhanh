@extends('backend.layouts.index')
@section('content')
    <div class="container all-detail-repair">
        <div class="title_repair" style="text-align: center">
            <b>
                <h2 >
                   Tạo lệnh sửa xe
                </h2>
            </b>
        </div>
     @foreach($pnotis->customer->car as $car)
        <form action="{{ route('admin.repair.store') }}" method="POST">
        @csrf
        <input class="form-control" name="id_notification" value="{{$pnotis->id}}" hidden>
            <div class="row repair_insert_main ">
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Họ & Tên<label>
                        </div>
                         <div class="insert information">
                            <input  class="form-control" name="name" value="{{$pnotis->customer->name}}" >
                         </div>   
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Biển số xe<label>
                        </div>
                        <div class="insert information">
                            <input  class="form-control" name="license_plate" value="{{$car->license_plate}}">
                        </div>   
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Địa chỉ<label>
                        </div>
                        <div class="insert information">
                            <input  class="form-control" name="address"  value="{{$pnotis->customer->address}}">
                        </div>    
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Loại xe<label>
                        </div>        
                        <div class="insert information">
                            <input  class="form-control" name="car_type" value="{{$car->type_car->vehicles}}- {{ $car->type_car->name_type}}">
                        </div>              
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Số điện thoại<label>
                        </div>  
                        <div class="insert information">
                            <input  class="form-control" name="phone" value="{{$pnotis->customer->phone}}">
                        </div>    
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Năm sản xuất<label>
                        </div>  
                        <div class="insert information">
                            <input   class="form-control" name="year_manufacture" value="{{$car->year_manufacture}}">
                        </div>    

                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Công ty bảo hiểm<label>
                        </div>  
                        <div class="insert information">
                            <input  class="form-control" name="insurance_company" value="{{$car->company->name}}">
                        </div>    
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Người giám định<label>
                        </div>  
                        <div class="insert information">
                            <input  class="form-control" name="assessor" value="{{$pnotis->customer->assessor}}" required>
                        </div>    
                    </div>
            </div>
            <hr>
            <div class="all-ws row">
                            <div class="col-5 p-3" >
                                <div class="label-input">
                                    <label for="input-2" >Công việc</label>
                                </div>    
                                <div class="content-work">
                                    <table class="table" style="border: 1px solid ">
                                        <tr>
                                            <th style="border: 1px solid " >Tên công việc</th>
                                            <th style="border: 1px solid " >Tiền công</th>
                                        </tr>
                                
                                         
                                        @foreach($pnotis->work as $work)
                                                <tr>
    
                                                    <td style="border: 1px solid " >{{$work->name_work}} </td>
                                                    <td style="border: 1px solid " ><input class="form-control"  name="wage[]" value="{{$work->wage}}" readonly></td>
                                                </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
                        
                            <div class="col-7 p-3">
                                    <div class="label-input">
                                        <label for="input-2" >Phụ tùng</label>
                                    </div>    
                                    <div class="content-sparepart">
                                    <table class="table" style="border: 1px solid ">
                                        <tr>
                                            <th scope="col" style="border: 1px solid "  >Tên phụ tùng</th>
                                            <th scope="col" style="border: 1px solid  " >Số lượng</th>
                                            <th scope="col" style="border: 1px solid " >Đơn giá</th>
                                            <!-- <th scope="col" style="border: 1px solid " >Thành tiền</th> -->
                                        </tr>
                                  
                                        @foreach($pnotis->in as $in)
                                        <tr>
                                            <input value="{{$in->details->id}}" name="id_spare[]" hidden>
                                            <td style="border: 1px solid "  >{{$in->details->dspare->name_spare}}- {{$in->details->dsupplier->name}}- {{$in->details->dtype->serial}}-{{$in->details->dtype->model}} </td>
                                        
                                            <td style="border: 1px solid " ><input name="amount_out[]" class="form-control" type="number" min="1" max="{{$in->amount_in}}" value="{{$in->amount_in}}"  required ></td>
                                            
                                            <td style="border: 1px solid " ><input name="price_out[]" class="form-control" type="number"  max="{{$in->details->price_reference}}" value="{{$in->details->price_reference}}"  ></td>
                                            
                                            <!-- <td style="border: 1px solid " ></td>         -->
                                        </tr>     
                                        @endforeach                  
                                   
                                    </table>    
                                    </div>
                            </div>
            </div>            
            <hr>
            <input type="submit" class="btn btn-success" value="Tạo lệnh sửa">
        </form>
        @endforeach
    </div>

@endsection