@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <a class="btn btn-success" href="{{ url('/admin/spare/type/insert') }}">
                        <i class="fas fa-plus"></i>
                </a>
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Serial</th>
                                <th scope="col">Model</th>
                                <th scope="col">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($type_spares as $key => $item)
                                <tr id="type_spare-{{$item->id}}">
                                    <td scope="row">{{$key+1 }}</td>
                                    <td>{{ $item->serial }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>
                                        <a class="btn btn-info"href="{{url('/admin/spare/type/edit',$item->id)}}">
                                            <i class="fas fa-pen" style="font-size:15px"></i>
                                        </a>
                                        <a data-id="{{$item->id}}" class="type-del btn btn-danger">
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
        $('.type-del').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"get",
                  url: "/admin/spare/type/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#type_spare-'+id).remove();
                  }

              });
          }
        });
    </script>
@endsection