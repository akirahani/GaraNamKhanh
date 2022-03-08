@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{ url('/admin/file/in/insert') }}" method="POST">
                @csrf
                <h3 style="margin-left: 5%">Tạo phiếu nhập</h3>
                <br>
                <div class="form-add">
                    <div class="title-base row">
                            <div class="form-group col-2">
                            </div>
                            <div class="form-group col-4">
                                <label for="input-7">Nội dung (Tên phụ tùng- Nhà cung cấp- Serial- Model) </label>
                                <select class="form-select"   aria-label="Default select example" name="id_sparein[]"  >
                                        @foreach($spare_detail as $val)
                                            <option style="background-color:white" >{{$val->id}}- {{$val->dspare->name_spare}}- {{$val->dsupplier->name}}- {{$val->dspare->serial}}- {{$val->dspare->model}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label for="input-7">Số lượng</label>
                                <input name="amount_in[]" type="number" min="1" class="form-control form-control-rounded" id="input-7" required>
                            </div>
                            <div  class="col-1" style="margin-top: 30px;">
                                <a class="btn-add0" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                            </div> 
                    </div>
                    
                </div>
                <div class="form-group mt-3 " style=" margin-left: 80%">
                    <button type="submit" class="btn btn-success btn-round px-5"></i>
                    Tạo</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('.btn-add0').click(function(){
        $(".form-add").append( '<div class="title-base row">'+
            ' <div class="form-group col-2">'+
            '</div>'+
            '<div class="form-group col-4">'+
                    '<label for="input-7">Nội dung (Tên phụ tùng- Nhà cung cấp- Serial- Model) </label>'+
                    '<select class="form-select"   aria-label="Default select example" name="id_sparein[]">'+
                            '@foreach($spare_detail as $val)'+
                                '<option style="background-color:white">{{$val->id}}-{{$val->dspare->name_spare}}- {{$val->dsupplier->name}}- {{$val->dspare->serial}}- {{$val->dspare->model}}</option>'+
                            '@endforeach'+
                    '</select>'+
                    '</div>'+
                    '<div class="form-group col-2">'+
                        '<label for="input-7">Số lượng</label>'+
                        '<input name="amount_in[]" type="number" min="1" class="form-control form-control-rounded" id="input-7" required>'+
                    '</div>'+
                    '<div  class="col-1  " style="margin-top: 30px;">'+
                        '<a class="btn-remove" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-minus-circle"></i></a>'+
                    '</div>'+
                    '</div>');
        $('.btn-remove').click(function(){
                $(this).parent().parent().remove();
        });
    }); 
</script>
@endsection