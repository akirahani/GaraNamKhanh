@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{url('/admin/car/company/store')}}" method="POST">
                @csrf
                <div class="form-add">
                    <div class="company_detail row">
                        <div class="form-group col-6">
                            <label for="input-6">Tên công ty BH</label>
                            <input name="name[]" type="text" class="form-control form-control-rounded" id="input-6" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-7">Địa chỉ</label>
                            <input name="address[]" type="text" class="form-control form-control-rounded" id="input-7" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-9">Số điện thoại</label>
                            <input name="phone[]" type="text" pattern="[0-9]{10}" class="form-control form-control-rounded" id="input-9" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-9">Website</label>
                            <input name="website[]" type="text" class="form-control form-control-rounded" id="input-9" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-9">Email</label>
                            <input name="email[]" type="text" class="form-control form-control-rounded" id="input-9" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-9">Mã số thuế</label>
                            <input name="tax_code[]" type="text" class="form-control form-control-rounded" id="input-9" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-9">Đánh giá</label>
                            <select class="form-select"   aria-label="Default select example" name="rating[]"  >
                                    @foreach(\App\InsuranceCompany::rating as $val)
                                        <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-9">Ghi chú</label>
                            <input name="note[]" type="text" class="form-control form-control-rounded" id="input-9">
                        </div>
                        <div class="form-group col-1" style="margin-top: 30px;margin-left:90%">
                            <a class="btn-add0" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                        </div>
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
                $(".form-add").append('<div class="company_detail row">'+
                        '<div class="form-group col-6">'+
                            '<label for="input-6">Tên công ty BH</label>'+
                            '<input name="name[]" type="text" class="form-control form-control-rounded" id="input-6" required>'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-7">Địa chỉ</label>'+
                            '<input name="address[]" type="text" class="form-control form-control-rounded" id="input-7" required>'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-9">Số điện thoại</label>'+
                            '<input name="phone[]" type="text" pattern="[0-9]{10}" class="form-control form-control-rounded" id="input-9" required>'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-9">Website</label>'+
                            '<input name="website[]" type="text" class="form-control form-control-rounded" id="input-9" required>'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-9">Email</label>'+
                            '<input name="email[]" type="text" class="form-control form-control-rounded" id="input-9" required>'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-9">Mã số thuế</label>'+
                            '<input name="taxcode[]" type="text" class="form-control form-control-rounded" id="input-9" required>'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-9">Đánh giá</label>'+
                            ' <select class="form-select"   aria-label="Default select example" name="rating[]">'+
                                    '@foreach(\App\InsuranceCompany::rating as $val)'+
                                        '<option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>'+
                                    '@endforeach'+
                            '</select>'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-9">Ghi chú</label>'+
                            '<input name="note[]" type="text" class="form-control form-control-rounded" id="input-9">'+
                        '</div>'+
                        '<div class="form-group" style="margin-top: 30px; margin-left:90%">'+
                            '<a class="btn-remove" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-minus-circle"></i></a>'+
                        '</div>'+
                    '</div>');
                $('.btn-remove').click(function(){
                        $(this).parent().parent().remove();
                });
            });
</script>
@endsection