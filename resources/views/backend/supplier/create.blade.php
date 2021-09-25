@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <!-- <div class="card-title">Round Vertical Form</div> -->
            <hr>
            <form action="{{ route('backend.supplier.store') }}" method="POST">
                @csrf
            <div class="form-add">
                <div class="supplier-detail row">
                    <div class="form-group col-6">
                        <label for="input-3">Tên nhà cung cấp</label>
                        <input name="name[]" type="text" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Địa chỉ</label>
                        <input name="address[]" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Số điện thoại</label>
                        <input name="phone[]" type="text" pattern="[0-9]{10}" class="form-control form-control-rounded"  id="input-9" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-10">Email</label>
                        <input name="email[]" type="text" class="form-control form-control-rounded" id="input-10" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-10">Website</label>
                        <input name="website[]" type="text" class="form-control form-control-rounded" id="input-10" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-10">Mã số thuế</label>
                        <input name="tax_code[]" type="text" class="form-control form-control-rounded" id="input-10" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-10">Ghi chú</label>
                        <input name="note[]" type="text" class="form-control form-control-rounded" id="input-10">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-10">Đánh giá</label>
                        <select class="form-select"   aria-label="Default select example" name="rating[]"  >
                                    @foreach(\App\Supplier::rating as $val)
                                        <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                                    @endforeach
                        </select>
                    </div>
                    <div  class="adding" style="margin-top: 30px; margin-left:90%">
                        <a class="btn-add0" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                    </div>
                    <hr> 
                </div>   
            </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-round px-5"></i>
                      Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
            $('.btn-add0').click(function(){
                $(".form-add").append('<div class="supplier-detail row">'+
                    '<div class="form-group col-6">'+
                        '<label for="input-6">Tên nhà cung cấp</label>'+
                        '<input name="name[]" type="text" class="form-control form-control-rounded" id="input-6">'+
                    '</div>'+
                    '<div class="form-group col-6">'+
                        '<label for="input-7">Địa chỉ</label>'+
                        '<input name="address[]" type="text" class="form-control form-control-rounded" id="input-7">'+
                    '</div>'+
                    '<div class="form-group col-6">'+
                        '<label for="input-9">Số điện thoại</label>'+
                        '<input name="phone[]" type="text" pattern="[0-9]{10}" class="form-control form-control-rounded" id="input-9">'+
                    '</div>'+
                    '<div class="form-group col-6">'+
                        '<label for="input-10">Email</label>'+
                        '<input name="email[]" type="text" class="form-control form-control-rounded" id="input-10">'+
                    '</div>'+
                    '<div class="form-group col-6">'+
                        '<label for="input-10">Website</label>'+
                        '<input name="website[]" type="text" class="form-control form-control-rounded" id="input-10">'+
                    '</div>'+
                    '<div class="form-group col-6">'+
                        '<label for="input-10">Mã số thuế</label>'+
                        '<input name="tax_code[]" type="text" class="form-control form-control-rounded" id="input-10">'+
                    '</div>'+
                    '<div class="form-group col-6">'+
                        '<label for="input-10">Ghi chú</label>'+
                        '<input name="note[]" type="text" class="form-control form-control-rounded" id="input-10">'+
                    '</div>'+
                    '<div class="form-group col-6">'+
                        '<label for="input-10">Đánh giá</label>'+
                        '<select class="form-select"   aria-label="Default select example" name="rating[]"  >'+
                                    '@foreach(\App\Supplier::rating as $val)'+
                                        '<option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>'+
                                    '@endforeach'+
                        '</select>'+
                    '</div>'+
                    '<div  class="minus" style="margin-top: 30px;margin-left:90%">'+
                        '<a class="btn-remove" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-minus-circle"></i></a>'+
                    '</div>'+
                    '<hr>'+
                '</div>');
                $('.btn-remove').click(function(){
                        $(this).parent().parent().remove();
                });
            });
</script>
@endsection