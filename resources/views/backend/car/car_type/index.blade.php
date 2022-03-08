@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ url('/admin/car/type/insert') }}">
                    <i class="fas fa-plus"></i>
                </a>
             
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên loại xe</th>
                                <th scope="col">Dòng xe</th>    
                                <th scope="col">Tác vụ</th>       
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($car as $key => $item)
                                <tr id="car_type-{{$item->id}}">
                                    <td scope="row">{{  $key+1 }}</td>
                                    <td>{{  $item->name_type }}</td>
                                    <td>{{ $item->vehicles }}</td>                    
                                    <td>
                                        <a class="btn btn-info"href="{{ route('admin.car.type.edit',$item->id) }}">
                                            <i class="fas fa-edit"></i>
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
                  url: "/admin/car/type/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#car_type-'+id).remove();
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

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

@endsection