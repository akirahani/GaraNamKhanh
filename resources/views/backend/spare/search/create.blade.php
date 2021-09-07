@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('backend.spare.search.store') }}" method="POST">
                @csrf
                <div class="title-spare-part">
                        <h4>Thông tin phụ tùng</h4>
                    </div>
                <div class="form-add">
                    <div class="row references-sapre mx-auto">
                        <div class="form-group col-3">
                            <label for="input-6">Tên phụ tùng (TK)</label>
                            <input name="name_spare[]" type="text" class="form-control form-control-rounded" id="input-6">
                        </div>
                        <div class="form-group col-2">
                            <label for="input-6">Đơn vị</label>
                            <input name="unit[]" type="text" class="form-control form-control-rounded" id="input-6">
                        </div>
                        <div  class="col-1" style="margin-top: 28px;">
                            <a class="btn-add2" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"></i>
                    Thêm TK</button>
                </div>     
            </form>
        </div>
    </div>
</div>
<script>
    $('.btn-add2').click(function(){
        $('.form-add').append('<div class="row references-sapre mx-auto">'+
                    '<div class="form-group col-3">'+
                        '<label for="input-6">Tên phụ tùng (TK)</label>'+
                        '<input name="name_spare[]" type="text" class="form-control form-control-rounded" id="input-6">'+
                    '</div>'+
                    '<div class="form-group col-2">'+
                            '<label for="input-6">Đơn vị</label>'+
                            '<input name="unit[]" type="text" class="form-control form-control-rounded" id="input-6">'+
                    '</div>'+
                    '<div class="form-group col-2">'+
                        '<label for="input-9">SL</label>'+
                        '<input name="amount_reference[]" type="number" class="form-control form-control-rounded" min="1" max="10" id="input-9">'+
                    '</div>'+
                    '<div  class="col-1" style="margin-top: 28px;">'+
                        '<a class="btn-remove" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-minus-circle"></i></a>'+
                    '</div>'+
                '</div>');
        $('.btn-remove').click(function(){
            $(this).parent().parent().remove();
        });
    });
</script>
@endsection