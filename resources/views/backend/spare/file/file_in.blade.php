@extends('backend.layouts.index')
@section('content')
  
        <table class="table" id="example">
        <a class="btn btn-success" href="{{url('/admin/file/in/create')}}">
            <i class="fas fa-plus"></i>
        </a>
        <br><br>
        <thead>

            <tr>
                <th scope="col">Mã phiếu nhập</th>
                <th scope="col">Ngày nhập</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filein as $fin)
            <tr id="filein-{{$fin->id}}">
                <td scope="col">{{$fin->id}}</td>
                <td scope="col">{{$fin->created_at}}</td>
                <td scope="col">
                @if(\App\FileIn::wait['id'] == $fin->status )
                    {{(\App\FileIn::wait['name'])}}
                @elseif(\App\FileIn::accept['id'] == $fin->status)
                    {{ \App\FileIn::accept['name']  }} 
                @elseif(\App\FileIn::cancel['id'] == $fin->status)
                    {{ \App\FileIn::cancel['name']  }}             
                @endif
                </td>
                <td scope="col">
                    <a class="btn btn-info"href="{{url('/admin/file/in/detail',$fin->id)}}">
                        <i class="fas fa-eye" style="font-size:15px"></i>
                    </a>
                    @if($fin->status == \App\FileIn::wait['id'])
                    <a data-id="{{$fin->id}}" class="filein btn btn-danger">
                         <i class="fas fa-trash" style="font-size:15px"></i>
                    </a>
                    @endif
                </td> 
            </tr>
            @endforeach  
        </tbody>
        </table>
<script>
         $('.filein').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  method:"get",
                  url: "/admin/file/in/delete/"+id,
                  data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                  },
                  success:function(){
                    $('#filein-'+id).remove();
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