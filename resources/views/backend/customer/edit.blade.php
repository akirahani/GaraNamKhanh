@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title"></div>
            <hr>
 
            <form action="{{ route('backend.customer.update') }}" method="POST"  enctype="multipart/form-data" runat="server">
                @csrf
                    <input name="id" value="{{ $customer->id }}" type="hidden" class="form-control form-control-rounded" id="input-6">
            <div class="row update-customer">
                <div class="form-group  col-6">
                        <label for="input-6">Họ và tên</label>
                        <input name="name" value="{{ $customer->name }}" type="text" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Email</label>
                        <input name="email" value="{{ $customer->email }}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Số điện thoại</label>
                        <input name="phone" value="{{ $customer->phone }}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-6">Địa chỉ</label>
                        <input name="address" value="{{ $customer->address }}" type="text" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                 
                    <div class="form-group col-6">
                        <label for="input-6">Đối tượng khách hàng</label>
                        <select class="form-select"   aria-label="Default select example" name="segment"  >
                            @foreach(\App\Customer::segment as $val)
                                    <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                            @endforeach
                        </select>
                        <!-- <input name="address" value="{{ $customer->segment}}" type="text" class="form-control form-control-rounded" id="input-6"> -->
                    </div>
                    <div class="form-group col-6">
                        <label for="input-6">Ngày sinh</label>
                        <input name="birthday" value="{{ $customer->birthday }}" type="date" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-6">Thông tin doanh nghiệp</label>
                        <input name="business_infomation" value="{{ $customer->business_infomation }}" type="text" class="form-control form-control-rounded" id="input-6" >
                    </div>
                    <div class="form-group col-6">
                        <label for="input-6">Thông tin liên quan khác</label>
                        <input name="related_infomation" value="{{ $customer->related_infomation }}" type="text" class="form-control form-control-rounded" id="input-6">
                    </div>
                    <div class="form-group col-12">
                        <label for="input-6">Ảnh đại diện	</label>
                        <div class="img-main " style="border: 2px dashed #0087F7; border-radius: 5px;" >
                            <img  class="img-display"/> 
                        </div>
                        <label for="partner-img" class="btn btn-info mt-2 "><i class="fas fa-upload"></i>Chọn ảnh
                            <input type='file' id="partner-img" name="avatar" accept="image/*"    class=" mb-2"  required multiple hidden/>
                        </label> 
                    
                    </div>
            </div>
               
                <!-- <div class="form-group">
                    <label for="input-7">Mat khau</label>
                  
                    <input name="password" value="{{ $customer->password }}" type="password" class="form-control form-control-rounded" id="input-7">
         
                </div> -->
                <!-- @foreach($customer->car as $car)
                <div class="form-group">
                    <label for="input-7">Biển số xe</label>
                  
                    <input name="license_plate" value="{{ $car->license_plate }}" type="text" class="form-control form-control-rounded" id="input-7">
         
                </div>
                <div class="form-group">
                    <label for="input-7">Loại xe</label>
                    <input name="car_type" value="{{ $car->type_car->vehicles}}- {{ $car->type_car->name_type}} " type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <label for="input-7">Năm sản xuất</label>
                    <input name="year_manufacture" value="{{ $car->year_manufacture }}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <label for="input-7">Công ty bảo hiểm</label>
                    <input name="insurance_company" value="{{ $car->company->name }}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
             
                @endforeach -->
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success btn-round px-5"></i>Cập nhật</button>
                </div>
            
            </form>
       
        </div>
    </div>
</div>
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }
  $("#partner-img").change(function() {
    readURL(this);
  });
  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img  class="img-display" style=" width:10%; padding:10px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#partner-img').change(function(){
        imagesPreview(this,'div.img-main');
    });
});
</script>
@endsection