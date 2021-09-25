@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <a class="btn btn-success" href="{{ url('/admin/spare/base/insert') }}">
                        <i class="fas fa-plus"></i>
                </a>
                <h5 class="card-title"></h5>       
                <div class="table-responsive" >
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên phụ tùng</th>
                                <th scope="col">Đơn vị tính</th>
                                <th scope="col">Serial</th>
                                <th scope="col">Model</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Ghi chú</th>
                                <th scope="col">Đánh giá</th>
                                <th scope="col">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($references as $key => $item)
                                <tr id="base_spare-{{$item->id}}">
                                    <td scope="row">{{$key+1 }}</td>
                                    <td>{{ $item->name_spare }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>{{ $item->serial }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->note }}</td>
                                    @foreach(\App\Reference::rating as $val)
                                        @if($item->rating == $val['id'])
                                            <td>{{ $val['name'] }}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                        <a class="btn btn-info"href="{{url('/admin/spare/base/edit',$item->id)}}">
                                            <i class="fas fa-pen" style="font-size:15px"></i>
                                        </a>
                                        <a data-id="{{$item->id}}" class="base-del btn btn-danger">
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
        $('.base-del').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"get",
                  url: "/admin/spare/base/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#base_spare-'+id).remove();
                  }

              });
          }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "order": [[ 3, "desc" ]]
            } );
        } );
    </script>
@endsection