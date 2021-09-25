@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <a class="btn btn-success" href="{{ route('admin.repair.insert') }}">
                    <i class="fas fa-plus"></i>
                </a>
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã lệnh sửa</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Biển số xe</th>
                                <th scope="col">Người giám định</th>
                                <th scope="col">Tổng chi phí</th>
                                <th scope="col">Thời gian tạo</th>
                                <th scope="col">Xem chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($repairs as  $key=>$repair)
                          @foreach($repair->customer->car as  $k=>$car)
                            <tr id="">
                                <td scope="row">{{$repair->id}}</td>
                                <td>{{$repair->customer->name}}</td>
                                <td>{{$car->license_plate}}</td>
                                <td>{{$repair->assessor}}</td>
                                <td>{{$repair->final_price}}</td>
                                <td>{{$repair->created_at}}</td>
                                <td>
                                    <a class="btn btn-info"href="{{url('/admin/repair/detail',$repair->id)}}">
                                        <i class="fas fa-eye" style="font-size:15px"></i>
                                    </a>
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