@extends('backend.layouts.index')
@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="take row">
                    <div class="col-7">
                        <h3>Lịch sử nhập phụ tùng</h3>
                    </div>
                    <div class="col-5">
                    </div>   
                </div>   
                <br>    
                <div class="table-responsive ">
                <form action="{{url('/admin/spare/exist/insert')}}" method="POST">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Đơn vị tính</th>
                                <th scope="col">Số lượng nhập</th> 
                                <th scope="col">Giá nhập</th>
                                <th scope="col">Thời gian nhập</th>   
                                <th scope="col">Mã phiếu nhập</th>     
           
                            </tr>
                        </thead>    
                        <tbody>
                                @foreach($sparein as $key=> $val)
                                    <tr id="">
                                        <td class="col-3">{{$val->details->dspare->name_spare}}- {{$val->details->dsupplier->name}}- {{$val->details->dspare->serial}}-{{$val->details->dspare->model}}</td>
                                        <td  class="col-1">{{$val->details->dspare->unit}}</td>
                                        <td  class="col-1">{{$val->amount_in}}</td>
                                        <td  class="col-1">{{$val->details->dspare->price}}</td>
                                        <td  class="col-1">{{$val->created_at}}</td>
                                        <td  class="col-1">{{$val->file_in->id}}</td>
                                        </tr> 
                                @endforeach    
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "order": [[ 3, "desc" ]]
        } );
    } );
</script>
@endsection     