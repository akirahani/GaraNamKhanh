@extends('backend.layouts.index')
@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>  
                <div class="take row">
                    <div class="col-7">
                        <h3>Lịch sử xuất tùng</h3>
                    </div>
                    <div class="col-5">
                
                    </div>
                </div>   
                <br>      
                <div class="table-responsive">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Đơn vị tính</th>
                                <th scope="col">Số lượng xuất</th> 
                                <th scope="col">Giá xuất</th> 
                      
                                <th scope="col">Thời gian</th>
                                <th scope="col">Phiếu xuất</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spare as $key => $item)
                            <tr id="spare-{{$item->id}}">
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $item->dout->dspare->name_spare }}- {{ $item->dout->dsupplier->name }}- {{ $item->dout->dspare->serial }}-{{ $item->dout->dspare->model }}</td>
                                <td>{{ $item->dout->dspare->unit }}</td>
                                <td>{{ $item->amount_out }}</td>
                                <td>{{ $item->unit_price }}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->file_out->id}}</td>
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
        $('.sparedel').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"get",
                  url: "/admin/spare/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#spare-'+id).remove();
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