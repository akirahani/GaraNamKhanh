@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ url('/admin/car/insert') }}">
                    <i class="fas fa-plus"></i>
                </a>
             
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Biển số xe</th>
                                <th scope="col">Tên xe</th>
                                <th scope="col">Số máy</th>
                                <th scope="col">Số khung</th>              
                                <th scope="col">Năm sản xuất</th>  
                                <th scope="col">Quãng đường đã đi</th>       
                                <th scope="col">Công ty bảo hiểm</th>     
                                <th scope="col">Loại xe</th>     
                                <th scope="col">Chủ xe</th>  
                                <th scope="col"></th>       
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($car as $key => $item)
                                <tr id="car{{$item->id}}">
                                    <td scope="row">{{  $key+1 }}</td>
                                    <td>{{  $item->license_plate }}</td>
                                    <td>{{ $item->name }}- {{ $item->color}}</td>
                                    <td>{{ $item->engine }}</td>
                                    <td>{{ $item->chassis}}</td>
                                    <td>{{ $item->year_manufacture}}</td>
                                    <td>{{ $item->run_distance}}</td>
                                    <td>{{ $item->company->name}}</td>
                                    <td>{{ $item->type_car->name_type}}- {{ $item->type_car->vehicles}}</td>
                                    <td>{{ $item->custom->name}}</td>
                                    <td>
                                        <a class="btn btn-info"href="{{ route('admin.car.edit',$item->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- <a data-id="{{$item->id}}" class="base-del btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a> -->
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
        $('.base-del').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"get",
                  url: "/admin/car/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#car'+id).remove();
                  }

              });
          }
        });
    </script>
@endsection