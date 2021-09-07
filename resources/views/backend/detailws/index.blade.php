@extends('backend.layouts.index')
@section('content')
<script href="{{asset('assets/js/select2.js')}}"></script>
<form action="{{url('/admin/response/store')}}" method="POST">  
@csrf 
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <div class="form-group">
                            <h3 class="card-title">Khách hàng</h3>
                            <select class="js-example-placeholder-multiple js-states  form-select" name="id_customer">
                            @foreach($customers as $customer)
                                <option style="background-color: #fff;"> {{$customer->id}} - {{$customer->name}} - {{$customer->phone}}</option>
                            @endforeach
                            </select>
                    </div>
                    <hr>
                    <div class="row title-works">
                        <div class="col-11"> <h3 class="card-title">Danh sách công việc</h3></div>
                        <div class="col-1" style="margin-bottom: 1%;" >  
                            <a class="btn btn-success" href="{{ url('/admin/work/index') }}">
                                    <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">Tên công việc</th>
                                <th scope="col">Tiền công</th>
                                <th scope="col">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($works as $key => $items)
                                <tr id="work-{{$items->id}}">
                                    <td >
                                        <input class="form-check-input" type="checkbox"   name="checktrue[]" id="flexCheckDefault" value="{{$items->id}}">
                                    </td>
                                    
                                    <td>{{ $items->name_work}}</td>
                                    <td>{{$items->wage}}</td>
                                    <td>
                                        <a data-id="{{$items->id}}" class="workdel btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    <hr>
                    <div class="row title-spare">
                        <div class="col-11"> <h3 class="card-title">Chi tiết phụ tùng</h3></div>
                        <div class="col-1" style="margin-bottom: 1%;" >  
                            <a class="btn btn-success" href="{{ url('/admin/spare/search/index') }}">
                                    <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">Nội dung phụ tùng</th>
                                <th scope="col">Giá tham khảo</th>
                                <!-- <th scope="col">Số lượng</th> -->
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sdetail as $item)
                                <tr id="detailws-{{$item->id}}">
                                    <td >
                                        <input class="form-check-input" type="checkbox"   name="checktrue1[]" id="flexCheckDefault" value="{{$item->id}}">
                                    </td>
                          
                                        <td>{{$item->dspare->name_spare}} {{$item->dsupplier->name}} {{$item->dtype->serial}} {{$item->dtype->model}}</td>  
                          
                                    <td>{{$item->price_reference}}</td>
                                    <!-- <td><input name="amount[]" class="form-control" type="number" min="1" max="10" ></td> -->
                                    <td>
                                        <a data-id="{{$item->id}}" class="swdel btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>  
    </div>
</div>
<input type="submit" class="btn btn-info" value="Báo giá" style="margin-left: 90%">
</form>
 <script>
    $('.swdel').click(function(){
        const id = $(this).data('id');
        var cfm = confirm("Bạn có chắc chắc muốn xóa?");
        if(cfm ==true){
            $.ajax({
                method: "get",
                url: "/admin/spare/detail/delete/"+id,
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                }, 
                success:function(){
                    $('#detailws-'+id).remove();
                }
            });
        }
    });


    $('.workdel').click(function(){
        const id = $(this).data('id');
        var cfm = confirm("Bạn có chắc chắc muốn xóa?");
        if(cfm ==true){
            $.ajax({
                method: "get",
                url: "/admin/work/delete/"+id,
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                }, 
                success:function(){
                    $('#work-'+id).remove();
                }
            });
        }
    });


   
</script>
@endsection