@extends('backend.layouts.index')
@section('content')
 
        <table class="table" id="example">
        <a class="btn btn-success" href="{{url('/admin/file/out/create')}}">
            <i class="fas fa-plus"></i>
        </a>
        <thead>
            <tr>
                <th scope="col">Mã phiếu xuất</th>
                <th scope="col">Ngày xuất</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pns as $pn)
            <tr id="file_out-{{$pn->id}}">
                <td scope="col">{{$pn->id}}</td>
                <td scope="col">{{$pn->created_at}}</td>
                <td scope="col">
                    @if(\App\FileOut::wait['id'] == $pn->status )
                        {{(\App\FileOut::wait['name'])}}
                    @elseif(\App\FileOut::accept['id'] == $pn->status)
                        {{ \App\FileOut::accept['name']  }} 
                    @elseif(\App\FileOut::cancel['id'] == $pn->status)
                        {{ \App\FileOut::cancel['name']  }}             
                    @endif
                </td>
                <td scope="col">
                    <a class="btn btn-info"href="{{url('/admin/file/out/detail',$pn->id)}}">
                        <i class="fas fa-eye" style="font-size:15px"></i>
                    </a>
                    @if($pn->status == \App\FileOut::wait['id'])
                    <a data-id="{{$pn->id}}" class="file_out btn btn-danger">
                         <i class="fas fa-trash" style="font-size:15px"></i>
                    </a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        <script>
         $('.file_out').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"get",
                  url: "/admin/file/out/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#file_out-'+id).remove();
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