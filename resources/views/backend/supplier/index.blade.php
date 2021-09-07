@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <a class="btn btn-success" href="{{ route('backend.supplier.create') }}">
                        <i class="fas fa-plus"></i>
                </a>
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Nhà cung cấp</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại</th> 
                                <th scope="col">Email</th> 
                                <th scope="col">Website</th>
                                <th scope="col">Mã số thuế</th>
                                <th scope="col">Tác vụ</th>                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($supplier as $key => $item)
                            <tr id="supplier-{{$item->id}}">
                                <td scope="row">{{ $supplier->firstItem() + $key }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->website }}</td>
                                <td>{{ $item->tax_code }}</td>                            
                                <td>
                                    
                                    <a class="btn btn-info"href="{{ route('backend.supplier.edit',$item->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a data-id="{{$item->id}}" class="supplierdel btn btn-danger">
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
</div>
    <script>
        $('.supplierdel').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"get",
                  url: "/admin/supplier/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#supplier-'+id).remove();
                  }

              });
          }
        });
    </script>
@endsection