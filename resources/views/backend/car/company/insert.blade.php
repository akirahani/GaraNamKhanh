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
                        <div class="form-group col-4">
                            <label for="input-6">Tên công ty BH</label>
                            <input name="name[]" type="text" class="form-control form-control-rounded" id="input-6">
                        </div>
                        <div class="form-group col-6">
                            <label for="input-7">Địa chỉ</label>
                            <input name="address[]" type="text" class="form-control form-control-rounded" id="input-7">
                        </div>
                        <div class="form-group col-2">
                            <label for="input-9">Số điện thoại</label>
                            <input name="phone[]" type="text" class="form-control form-control-rounded" id="input-9">
                        </div>
                        <div class="form-group col-6">
                            <label for="input-9">Website</label>
                            <input name="website[]" type="text" class="form-control form-control-rounded" id="input-9">
                        </div>
                        <div class="form-group col-5">
                            <label for="input-9">Email</label>
                            <input name="email[]" type="text" class="form-control form-control-rounded" id="input-9">
                        </div>
                        <div class="form-group col-1" style="margin-top: 30px;">
                            <a class="btn-add0" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"></i>
                        Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
        $('.btn-add0').click(function(){
                $(".form-add").append('<div class="company_detail row">'+
                        '<div class="form-group col-4">'+
                            '<label for="input-6">Tên công ty BH</label>'+
                            '<input name="name[]" type="text" class="form-control form-control-rounded" id="input-6">'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-7">Địa chỉ</label>'+
                            '<input name="address[]" type="text" class="form-control form-control-rounded" id="input-7">'+
                        '</div>'+
                        '<div class="form-group col-2">'+
                            '<label for="input-9">Số điện thoại</label>'+
                            '<input name="phone[]" type="text" class="form-control form-control-rounded" id="input-9">'+
                        '</div>'+
                        '<div class="form-group col-6">'+
                            '<label for="input-9">Website</label>'+
                            '<input name="website[]" type="text" class="form-control form-control-rounded" id="input-9">'+
                        '</div>'+
                        '<div class="form-group col-5">'+
                            '<label for="input-9">Email</label>'+
                            '<input name="email[]" type="text" class="form-control form-control-rounded" id="input-9">'+
                        '</div>'+
                        '<div class="form-group col-1" style="margin-top: 30px;">'+
                            '<a class="btn-remove" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-minus-circle"></i></a>'+
                        '</div>'+
                    '</div>');
                $('.btn-remove').click(function(){
                        $(this).parent().parent().remove();
                });
            });
</script>
@endsection