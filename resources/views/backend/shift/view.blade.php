@extends('backend.layouts.index')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">

    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Quản lý nhóm ca</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Phân ca</a>
      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Danh sách</a>
    </div>
</nav>
    
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form action="{{ route('backend.groupshift.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input-4">Tên nhóm ca</label>
                            <input name="name" type="text" class="form-control form-control-rounded" id="input-3">
                        </div>
                    </div>
                </div>
                
                <div id="form-add">
                    <div class="add">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="input-7">Thời gian bắt đầu</label>
                                <input name="start_time[]" type="time" class="form-control form-control-rounded" id="input-6">
                            </div>
                            <div class="col-md-3">
                                <label for="input-9">Thời gian kết thúc</label>
                                <input name="end_time[]" type="time" class="form-control form-control-rounded" id="input-6">
                            </div>
                            <div class="col-md-3" style="margin-top: 40px;">
                                <a class="btn-add " href="javascript:void(0)">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"class="btn btn-success "  id="add_group">Thêm</button>
            </form>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>       
                            <div class="table-responsive">
                                <table class="table" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nhóm ca</th>
                                            <th scope="col">Thời gian bắt đầu</th>
                                            <th scope="col">Thời gian kết thúc</th>
                                            <th scope="col">Tác vụ</th>                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($shift as $key => $item)
                                            <tr>
                                                <td scope="row">{{ $key+1 }}</td>
                                                <td>{!! \App\Groupshift::where('id',[$item->group_id])->first()->name !!}</td>
                                                <td>{{ $item->start_time }}</td>
                                                <td>{{ $item->end_time }}</td>
                                                <td>
                                                    <a href="{{ route('backend.shift.destroy',$item->id) }}">
                                                        <button type="button" class="btn btn-danger">  <i class="fas fa-trash-alt"></i></button>
                                                    </a>
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
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="container list-assignment">
                    <form action="{{ route('backend.shift.assignment') }}" method="POST">
                        @csrf
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3 border bg-light list-member">
                                    @foreach ($members as $item)
                                        <input type="checkbox" name="member_id[]" value="{{ $item->id }}">
                                        <label for="vehicle1">{{ $item->name }}</label><br>                            
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 border bg-light list-time">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Ngày bắt đầu: </label>
                                            <div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd"> <input class="form-control" readonly=""  name="start_date"> 
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>Ngày kết thúc: </label>
                                            <div id="datepicker2" class="input-group date" data-date-format="yyyy-mm-dd"> <input class="form-control" readonly=""  name="end_date"> 
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border bg-light list-shift">
                                        @foreach ($group_shift as $item)
                                            <input type="checkbox" name="group_id[]" value="{{ $item->id }}">
                                            <label for="vehicle1">{{ $item->name }}</label><br>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-sm-6 col-md-8"></div>
                            <div class="col-6 col-md-4 create-assign">
                                <button type="submit" class="btn btn-success">Tạo mới</button>
                            </div>
                        </div>
                        
                    </form>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>       
                            <div class="table-responsive">
                            <label for="startDate">Chọn tháng/ năm</label>
                                <form action="{{url('/admin/shift')}}" method="GET" class="form-view">
                                 <input type="text" class="form-control" name="datepicker3"  id="datepicker3" autocomplete="off" value="@if(isset($_GET['datepicker3'])) {!!$_GET['datepicker3']!!}   @endif" >
                                    <input type="submit" id="submit" hidden >
                                </form>
                                <table class="table" style="text-align: center;">
                                    <thead>
                                        <tr>
                                  
                                            <th scope="col">Họ và tên</th>
                                            @foreach($records as $record)
                                            <th scope="col">{{$record['date']}} </th>     
                                            @endforeach                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($members as $key=>$member)
                                        <tr>
                                            <td>{!! $member['name'] !!}</td>
                                            @foreach ($member->ShiftName as $key => $item)
                                               
                                                <td>{{$item['ShiftName']}}</td>

                                            @endforeach            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $(function () {  
            $("#datepicker").datepicker({         
                autoclose: true,         
                todayHighlight: true 
            }).datepicker('update', new Date());
            $("#datepicker2").datepicker({         
                autoclose: true,         
                todayHighlight: true 
            }).datepicker('update', new Date());
        });
    </script>
    <script>
        $(document).ready(function(){
            $("body").delegate('.btn-add','click',function(){
                $("#form-add").append('<div class="add">'+
                                            '<div class="row">'+
                                                '<div class="col-md-3">'+
                                                    '<label for="input-7">Thời gian bắt đầu</label>'+
                                                    '<input name="start_time[]" type="time" class="form-control form-control-rounded" id="input-7">'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<label for="input-9">Thời gian kết thúc</label>'+
                                                    '<input name="end_time[]" type="time" class="form-control form-control-rounded" id="input-9">'+
                                                '</div>'+
                                                '<div class="col-md-2" style="margin-top: 35px;">'+
                                                    '<a class="btn-add" href="javascript:void(0)">+</a>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>');
            });
        });
    </script>
    <script>
            $("#datepicker3").datepicker({
            format: "yyyy-mm",
            startView: "months", 
            minViewMode: "months", 
        });
        $('#datepicker3').change(function(){
            $('.form-view').find('input[type=submit]').click();
            // $('#nav-contact').dialog();
        });
  </script>
@endsection