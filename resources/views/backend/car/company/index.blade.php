@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ url('/admin/car/company/insert') }}">
                    <i class="fas fa-plus"></i>
                </a>
             
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên CTBH</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại</th>       
                                <th scope="col">Website</th>
                                <th scope="col">Email</th> 
                                <th scope="col">Mã số thuế</th>   
                                <th scope="col">Đánh giá</th>   
                                <th scope="col">Ghi chú</th>         
                                <th scope="col">Tác vụ</th>    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($company as $key => $item)
                                <tr id="company-{{$item->id}}">
                                    <td scope="row">{{  $key+1 }}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->website }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->tax_code}}</td>
                                    @foreach(\App\InsuranceCompany::rating as $val)
                                        @if($item->rating == $val['id'])
                                            <td>{{ $val['name']}}</td>
                                        @endif
                                    @endforeach
                            
                                    <td>{{ $item->note }}</td>
                                    <td>
                                        
                                        <a class="btn btn-info"href="{{url('/admin/car/company/edit',$item->id)}}">
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
                  url: "/admin/car/company/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#company-'+id).remove();
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