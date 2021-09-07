@extends('backend.layouts.index')
@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ url('/admin/customer/insert') }}">
                    <i class="fas fa-user-plus"></i>
                </a>
             
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Tài khoản</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại</th>     
                                <th scope="col">Tác vụ</th>           
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($customer as $key => $item)
                                <tr id="customer{{$item->id}}">
                                    <td scope="row">{{  $key+1 }}</td>
                                    <td>{{  $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        
                                        <a class="btn btn-info"href="{{ route('backend.customer.edit',$item->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a data-id="{{$item->id}}" class="cusdel btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>    
                                @endforeach            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        $('.cusdel').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"get",
                  url: "/admin/customer/delete/"+id,
                  data: {
                    'id': id,
                  },
                  success:function(){
                    $('#customer'+id).remove();
                  }

              });
          }
        });
    </script>
@endsection