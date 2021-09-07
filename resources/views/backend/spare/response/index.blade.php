@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Biển số xe</th>
                                <th scope="col">Địa chỉ</th>     
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col"></th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($price_notis as $price_noti)
                            @foreach( $price_noti->customer->car as $car)
                            <tr id="">
                                <td scope="row">{{$price_noti->id}}</td>
                                    <td>{{$price_noti->customer->name}}</td>
                                    <td>{{$car->license_plate}}</td>
                                    <td>{{$price_noti->customer->address}}</td>
                                    <td>{{$price_noti->customer->phone}}</td>
                                    <td>{{$price_noti->created_at}}</td>
                                    <td>
                                        @if(\App\PriceNotification::in['id'] ==$price_noti->status)
                                            {{\App\PriceNotification::in['name']}}
                                        @elseif(\App\PriceNotification::status_success['id']==$price_noti->status )
                                            {{\App\PriceNotification::status_success['name']}}
                                        @elseif(\App\PriceNotification::status_pending['id']==$price_noti->status )
                                            {{\App\PriceNotification::status_pending['name']}}
                                        @endif             
                                    </td> 
                                    <td>    
                                        <a class="btn btn-info"href="{{url('/admin/response/detail',$price_noti->id)}}">
                                            <i class="fas fa-eye" style="font-size:15px"></i>
                                        </a>
                                    </td>
                            </tr>  
                            @endforeach  
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection