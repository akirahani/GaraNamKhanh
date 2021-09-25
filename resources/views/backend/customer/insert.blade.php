@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <!-- <div class="card-title">Round Vertical Form</div> -->
            <hr>
            <form action="{{ route('backend.customer.store') }}" method="POST"  enctype="multipart/form-data" runat="server">
                @csrf
                <div class="row insert-customer">
                    <div class="form-group  col-6">
                        <label for="input-6">Họ và tên</label>
                        <input name="name" type="text" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Email</label>
                        <input name="email" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Mật khẩu</label>
                        <input name="password" type="password" class="form-control form-control-rounded" id="input-9" required>
                    </div>
                    <div class="form-group col-6">
                    <label for="input-9">Địa chỉ</label>
                        <input name="address" type="text" class="form-control form-control-rounded" id="input-9" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Số điện thoại</label>
                        <input name="phone" type="text"  pattern="[0-9]{10}" class="form-control form-control-rounded" id="input-9" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Ngày sinh</label>
                        <input name="birthday" type="date"   class="form-control form-control-rounded" id="input-9" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Thông tin doanh nghiệp</label>
                        <input name="business_infomation" class="form-control form-control-rounded" id="input-9" >
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Thông tin liên quan khác</label>
                        <input name="related_infomation"    class="form-control form-control-rounded" id="input-9">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Đối tượng khách hàng</label>
                        <select class="form-select"   aria-label="Default select example" name="segment"  >
                            @foreach(\App\Customer::segment as $val)
                            <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-12">
                        <label for="input-9">Ảnh đại diện</label>
                        <div class="img-main " style="border: 2px dashed #0087F7; border-radius: 5px;">
                            <img  class="img-display"/> 
                        </div>
                        <label for="partner-img" class="btn btn-info mt-2 "><i class="fas fa-upload"></i>Chọn ảnh
                            <input type='file' id="partner-img" name="avatar" accept="image/*"   required  class=" mb-2"  multiple hidden required/>
                        </label> 
                    </div>
                      
                </div>
         
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success btn-round px-5"></i>
                        Thêm</button>
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