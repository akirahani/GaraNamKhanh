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

        <form action="{{ route('admin.repair.store') }}" method="POST">
        @csrf
        <input class="form-control" name="id_notification" value="" hidden>
            <div class="row repair_insert_main ">
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Họ & Tên<label>
                        </div>
                         <div class="insert information">
                            <input  class="form-control" name="name"   required>
                         </div>   
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Biển số xe<label>
                        </div>
                        <div class="insert information">
                            <input  class="form-control" name="license_plate"  required>
                        </div>   
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Địa chỉ<label>
                        </div>
                        <div class="insert information">
                            <input  class="form-control" name="address"  required>
                        </div>    
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Loại xe<label>
                        </div>        
                        <div class="insert information">
                            <input  class="form-control" name="car_type"  required>
                        </div>              
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Số điện thoại<label>
                        </div>  
                        <div class="insert information">
                            <input  class="form-control" name="phone"  required>
                        </div>    
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Năm sản xuất<label>
                        </div>  
                        <div class="insert information">
                            <input   class="form-control" name="year_manufacture"  required>
                        </div>    

                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Công ty bảo hiểm<label>
                        </div>  
                        <div class="insert information">
                            <input  class="form-control" name="insurance_company"  required>
                        </div>    
                    </div>
                    <div class="col-6">
                        <div class= "label-input">
                            <label >Người giám định<label>
                        </div>  
                        <div class="insert information">
                            <input  class="form-control" name="assessor"  required>
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
                                
                                  
                                                <tr>
    
                                                    <td style="border: 1px solid " ></td>
                                                    <td style="border: 1px solid " ><input class="form-control"  name="wage[]" value="" readonly></td>
                                                </tr>
                              
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
                                  
       
                                        <tr>
                                            <input value="" name="id_spare[]" hidden>
                                            <td style="border: 1px solid "  > </td>
                                        
                                            <td style="border: 1px solid " ><input name="amount_out[]" class="form-control" type="number" min="1" max="" value=""  required ></td>
                                            
                                            <td style="border: 1px solid " ><input name="price_out[]" class="form-control" type="number"  max="" value=""  ></td>
                                            
                                            <!-- <td style="border: 1px solid " ></td>         -->
                                        </tr>     
                                                 
                                   
                                    </table>    
                                    </div>
                            </div>
            </div>            
            <hr>
            <input type="submit" class="btn btn-success" value="Tạo lệnh sửa">
        </form>
    
    </div>

@endsection