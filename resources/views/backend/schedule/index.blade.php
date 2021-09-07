@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <!-- <a class="btn btn-success" href="{{ route('backend.member.create') }}">
                    <i class="fas fa-user-plus"></i>
                </a> -->
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Điện thoại</th>
                                <th scope="col">Giờ</th>
                                <th scope="col">Ngày</th> 
                                <th scope="col">Quãng đường đã chạy</th> 
                                <th scope="col">Yêu cầu</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col"></th>                 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book as $key => $item)
                            <tr id="member-{{$item->id}}">
                                <input value="{{$item->id}}" id="id" hidden>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $item->customer->name }}</td>
                                <td>{{ $item->customer->phone }}</td>   
                                <td>{{ $item->hour }} </td>         
                                <td>{{ $item->day }} </td>  
                                <td>{{ $item->run_distance  }} </td> 
                                <td>{{ $item->want  }} </td>
                                <td>
                                    @if(\App\Book::status_pending['id'] == $item->status)
                                    {{ \App\Book::status_pending['name']  }} 
                                    @elseif(\App\Book::status_success['id'] == $item->status)
                                    {{ \App\Book::status_success['name']  }} 
                                    @elseif(\App\Book::status_other['id'] == $item->status)
                                    {{ \App\Book::status_other['name']  }} 
                                    @endif
                                </td>
                                @if(\App\Book::status_pending['id'] == $item->status)
                                <td>
                                    <a class="btn btn-success submit" id="submit" data-id="{{$item->id}}" >
                                        <i class="fas fa-check"></i>
                                    </a>
                                    <a data-id="{{$item->id}}" class="memdel btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                                @endif
                            </tr>    
                          
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal -->


    <script>
        $('.memdel').click(function(){
         const id = $(this).data('id');
         var cfrm = confirm("Bạn có chắc chắn muốn xóa ?");
             if(cfrm == true){
              $.ajax({
                  type:"GET",
                  url: "/api/book/delete/"+id,
                  headers: {
                    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBjN2UwMTQ4ZTJlN2MzOGJmMTQ1MjIwMWE3YWRhYTFlOTc0NmQ5MGVjZjE2NTFlNjU3YzE4MjEwNTg5YmEyZWFlNGJlZDBkYmQwYjMzZDdjIn0.eyJhdWQiOiIxIiwianRpIjoiMGM3ZTAxNDhlMmU3YzM4YmYxNDUyMjAxYTdhZGFhMWU5NzQ2ZDkwZWNmMTY1MWU2NTdjMTgyMTA1ODliYTJlYWU0YmVkMGRiZDBiMzNkN2MiLCJpYXQiOjE2MjcyOTI2OTIsIm5iZiI6MTYyNzI5MjY5MiwiZXhwIjoxNjU4ODI4NjkyLCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.i8-wsnsIJrbAkVkbTeQ04L7aFmRrGwcZE7AnHwFXq7wRkrSDAfJBLOiKIjcPWh7CSkYRdZPCfLoZc9QjeigNi0EiR24G4d-Fpuzc-uI4b8KA4_widfz2Vw2pdMUwTqZaema5Fhkh3kogzFuCgpqUg6HTPSBltVZTS7tZk3op82dn5GbeEgef44mXiKf5DZGi3ONPvV16JhNmu2CpAU4Nuywj4ZMNDH2isRRF3xfrrpqt5a0lSSQMFfXJZqtEBZhT97wVsK4kMIxE-DmfxPGZ07T27HCr0GC79itVLWiEuirimezB6smKI68l8WcKoiqC6a1F-0OKLrr8XeQlOwi-PdliKGDIw24VHcmxyx5kU91CSw7K65V-j2dzrBbRlyjD-bcSDOcKB-LyIdEizXtKSTzFlCNlCx1QA88KbvPFxH0gQn8wDf7ZarEKjk6ZdczVbhnoggBS4PLnafO0l2-_3ZlVYsX5SjezYvPXkdtqjfCpX6kusgxDRfHnpdO9r5hoLPkNnkYFQpb0D3i-odLoMa0ZcU7aMaHDNwj2ntxcophxXcSvH_YcRwHrl_qjyep3TYEwfP5vRBQ3DFriBS7Iui31EMM85aLozcfyzbmIptClvES6m5E8HyaN5Yqj5VlQBGhWkzvzj3JjKaBOP5MPgg1IOChIIi3BzRAxZTFMQFE'
                },
                  data: {
                    'id': id
                  },
                  success:function(){
                    location.reload();
                  }

              });
          }
        });
    
        $('.submit').click(function(){
            var id = $(this).data('id');
            $.ajax({
                url: "{{route('book.update')}}",
                type :"POST",
                headers: {
                    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBjN2UwMTQ4ZTJlN2MzOGJmMTQ1MjIwMWE3YWRhYTFlOTc0NmQ5MGVjZjE2NTFlNjU3YzE4MjEwNTg5YmEyZWFlNGJlZDBkYmQwYjMzZDdjIn0.eyJhdWQiOiIxIiwianRpIjoiMGM3ZTAxNDhlMmU3YzM4YmYxNDUyMjAxYTdhZGFhMWU5NzQ2ZDkwZWNmMTY1MWU2NTdjMTgyMTA1ODliYTJlYWU0YmVkMGRiZDBiMzNkN2MiLCJpYXQiOjE2MjcyOTI2OTIsIm5iZiI6MTYyNzI5MjY5MiwiZXhwIjoxNjU4ODI4NjkyLCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.i8-wsnsIJrbAkVkbTeQ04L7aFmRrGwcZE7AnHwFXq7wRkrSDAfJBLOiKIjcPWh7CSkYRdZPCfLoZc9QjeigNi0EiR24G4d-Fpuzc-uI4b8KA4_widfz2Vw2pdMUwTqZaema5Fhkh3kogzFuCgpqUg6HTPSBltVZTS7tZk3op82dn5GbeEgef44mXiKf5DZGi3ONPvV16JhNmu2CpAU4Nuywj4ZMNDH2isRRF3xfrrpqt5a0lSSQMFfXJZqtEBZhT97wVsK4kMIxE-DmfxPGZ07T27HCr0GC79itVLWiEuirimezB6smKI68l8WcKoiqC6a1F-0OKLrr8XeQlOwi-PdliKGDIw24VHcmxyx5kU91CSw7K65V-j2dzrBbRlyjD-bcSDOcKB-LyIdEizXtKSTzFlCNlCx1QA88KbvPFxH0gQn8wDf7ZarEKjk6ZdczVbhnoggBS4PLnafO0l2-_3ZlVYsX5SjezYvPXkdtqjfCpX6kusgxDRfHnpdO9r5hoLPkNnkYFQpb0D3i-odLoMa0ZcU7aMaHDNwj2ntxcophxXcSvH_YcRwHrl_qjyep3TYEwfP5vRBQ3DFriBS7Iui31EMM85aLozcfyzbmIptClvES6m5E8HyaN5Yqj5VlQBGhWkzvzj3JjKaBOP5MPgg1IOChIIi3BzRAxZTFMQFE'
                },
                data: {
                    'id': id
                  },
                  success:function(){
                    location.reload();
                  }
            });
        });
    </script>
@endsection