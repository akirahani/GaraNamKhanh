@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{ url('/admin/spare/base/store') }}" method="POST">
                @csrf
                <div class="form-add">
                    <div class="title-base row">
                        <div class="form-group col-6">
                            <label for="input-6">Tên phụ tùng</label>
                            <input name="name_spare" type="text" class="form-control form-control-rounded" id="input-6" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-7">Đơn vị tính</label>
                            <input name="unit" type="text" class="form-control form-control-rounded" id="input-7" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-6">Serial</label>
                            <input name="serial" type="text" class="form-control form-control-rounded" id="input-6" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-7">Model</label>
                            <input name="model" type="text" class="form-control form-control-rounded" id="input-7" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-7">Giá cả</label>
                            <input name="price" type="number" min="10000" class="form-control form-control-rounded" id="input-7" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="input-7">Đánh giá</label>
                            <select class="form-select"   aria-label="Default select example" name="rating"  >
                                    @foreach(\App\Reference::rating as $val)
                                        <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="input-7">Ghi chú</label>
                            <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>  
                        <!-- <div  class="col-1  " style="margin-top: 30px;">
                            <a class="btn-add0" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                        </div>  -->
                    </div>
                    
                </div>
                <div class="form-group mt-3 ">
                    <button type="submit" class="btn btn-success btn-round px-5"></i>
                    Nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <script>
 
            $('.btn-add0').click(function(){
                $(".form-add").append( '<div class="title-type row">'+
                    '<div class="form-group col-6">'+
                        '<label for="input-6">Tên phụ tùng</label>'+
                        '<input name="name_spare[]" type="text" class="form-control form-control-rounded" id="input-6">'+
                    '</div>'+
                    '<div class="form-group col-5">'+
                        '<label for="input-7">Đơn vị tính</label>'+
                        ' <input name="unit[]" type="text" class="form-control form-control-rounded" id="input-7">'+
                    '</div>'+
                    '<div  class="col-1  " style="margin-top: 30px;">'+
                        '<a class="btn-remove" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-minus-circle"></i></a>'+
                    '</div>'+
                    '</div>');
                $('.btn-remove').click(function(){
                        $(this).parent().parent().remove();
                });
            });
  
       
</script> -->
@endsection