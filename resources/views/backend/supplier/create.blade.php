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
                    <div class="form-group col-3">
                        <label for="input-3">Tên nhà cung cấp</label>
                        <input name="name[]" type="text" class="form-control form-control-rounded" id="input-6">
                    </div>
                    <div class="form-group col-4">
                        <label for="input-7">Địa chỉ</label>
                        <input name="address[]" type="text" class="form-control form-control-rounded" id="input-7">
                    </div>
                    <div class="form-group col-2">
                        <label for="input-9">Số điện thoại</label>
                        <input name="phone[]" type="text" class="form-control form-control-rounded" min="1" id="input-9">
                    </div>
                    <div class="form-group col-3">
                        <label for="input-10">Email</label>
                        <input name="email[]" type="text" class="form-control form-control-rounded" id="input-10">
                    </div>
                    <div class="form-group col-3">
                        <label for="input-10">Website</label>
                        <input name="website[]" type="text" class="form-control form-control-rounded" id="input-10">
                    </div>
                    <div class="form-group col-2">
                        <label for="input-10">Mã số thuế</label>
                        <input name="tax_code[]" type="text" class="form-control form-control-rounded" id="input-10">
                    </div>
                    <div  class="col-1  " style="margin-top: 30px;">
                        <a class="btn-add0" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                    </div>
                    <hr> 
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
                $(".form-add").append('<div class="supplier-detail row">'+
                    '<div class="form-group col-3">'+
                        '<label for="input-6">Tên nhà cung cấp</label>'+
                        '<input name="name[]" type="text" class="form-control form-control-rounded" id="input-6">'+
                    '</div>'+
                    '<div class="form-group col-4">'+
                        '<label for="input-7">Địa chỉ</label>'+
                        '<input name="address[]" type="text" class="form-control form-control-rounded" id="input-7">'+
                    '</div>'+
                    '<div class="form-group col-2">'+
                        '<label for="input-9">Số điện thoại</label>'+
                        '<input name="phone[]" type="text" class="form-control form-control-rounded" min="1" id="input-9">'+
                    '</div>'+
                    '<div class="form-group col-3">'+
                        '<label for="input-10">Email</label>'+
                        '<input name="email[]" type="text" class="form-control form-control-rounded" id="input-10">'+
                    '</div>'+
                    '<div class="form-group col-3">'+
                        '<label for="input-10">Website</label>'+
                        '<input name="website[]" type="text" class="form-control form-control-rounded" id="input-10">'+
                    '</div>'+
                    '<div class="form-group col-2">'+
                        '<label for="input-10">Mã số thuế</label>'+
                        '<input name="tax_code[]" type="text" class="form-control form-control-rounded" id="input-10">'+
                    '</div>'+
                    '<div  class="col-1  " style="margin-top: 30px;">'+
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