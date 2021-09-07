@extends('backend.layouts.index')
@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <a class="btn btn-success" href="{{ route('backend.member.create') }}">
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
                                <th scope="col">Tác vụ</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($member as $key => $item)
                            <tr id="member-{{$item->id}}">
                                <td scope="row">{{ $member->firstItem() + $key }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    
                                    <a class="btn btn-info"href="{{ route('backend.member.edit',$item->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a data-id="{{$item->id}}" class="memdel btn btn-danger">
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
        $('.memdel').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"post",
                  url: "/admin/member/destroy/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#member-'+id).remove();
                  }

              });
          }
        });
    </script>
@endsection