@extends('backend.layouts.index')
@section('content')
<form action="{{url('/admin/spare/detail/insert')}}" method="POST">
@csrf
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <div class="row title-spares">
                        <div class="col-11"><h3 class="card-title">Lựa chọn phụ tùng</h3> </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tên phụ tùng</th>
                                <th scope="col">Nhà cung cấp TK</th>
                                <th scope="col">Chủng loại</th>
                                <th scope="col">Giá tham khảo</th>
                                <th scope="col">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                                <tr>
                                    <td scope="col">
                                        <select class="form-select" name="id_spare[]">
                                            @foreach($references as $reference)
                                                <option style="background-color: #fff; " >{{$reference->id}}- {{$reference->name_spare}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td scope="col">
                                        <select class="form-select" name="id_supplier[]">
                                            @foreach($suppliers as $supplier)
                                                <option style="background-color: #fff; " >{{$supplier->id}}- {{$supplier->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td scope="col">
                                        <select class="form-select" name="id_type[]">
                                            @foreach($types as $type)
                                                <option style="background-color: #fff; " >{{$type->id}}- {{$type->serial}} - {{$type->model}} </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td scope="col"><input placeholder="Mời nhập giá" class="form-control" name="price_reference[]" required></td>
                                    <td scope="col"> 
                                        <div>
                                            <a class="btn-add2" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                                        </div>
                                    </td>
                                </tr> 
                         
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<input class="btn btn-info" type="submit" value="Thêm" style="margin-left:90%;"> 
</form>
<script>
    $('.btn-add2').click(function(){
        $('table tbody').append('<tr>'+
                                '<td scope="col">'+
                                    '<select class="form-select" name="id_spare[]" >'+
                                        '@foreach($references as $reference)'+
                                            '<option style="background-color: #fff; " >{{$reference->id}}- {{$reference->name_spare}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                '</td>'+
                                '<td scope="col">'+
                                    '<select class="form-select" name="id_supplier[]" >'+
                                        '@foreach($suppliers as $supplier)'+
                                            '<option style="background-color: #fff; " >{{$supplier->id}}- {{$supplier->name}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                '</td>'+
                                '<td scope="col">'+
                                    '<select class="form-select" name="id_type[]" >'+
                                        '@foreach($types as $type)'+
                                            '<option style="background-color: #fff; " >{{$type->id}}- {{$type->serial}} - {{$type->model}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                '</td>'+
                                '<td scope="col"><input placeholder="Mời nhập giá" class="form-control" name="price_reference[]"></td>'+
                                '<td scope="col"> '+
                                    '<div>'+
                                        '<a class="btn-remove" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-minus-circle"></i></a>'+
                                    '</div>'+
                                '</td>'+
                            '</tr>'
                            );
        $(".btn-remove").click(function(){
                    $(this).parents("tr").remove();
        });
    });
</script>

@endsection