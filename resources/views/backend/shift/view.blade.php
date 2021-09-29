@extends('backend.layouts.index')
@section('content')

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        {{-- <a class="nav-item nav-link show active" id="nav-time-tab" data-toggle="tab" href="#nav-time" role="tab" aria-controls="nav-time" aria-selected="true">Quản lý thời gian</a> --}}
        <a class="nav-item nav-link show active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Quản lý nhóm ca</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Phân ca</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Danh sách</a>
    </div>
</nav>
    
    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form action="{{ route('backend.shift.store') }}" method="POST">
                @csrf
                <div id="form-add">
                    <div class="add">
                        <div class="row pt-3">
                            <div class="col-md-3">
                                <label for="input-7">Thời gian bắt đầu I</label>
                                <input name="start_time1" type="time" class="form-control form-control-rounded" value="{{ $shift->start_time1 }}">
                            </div>
                            <div class="col-md-3">
                                <label for="input-9">Thời gian kết thúc I</label>
                                <input name="end_time1" type="time" class="form-control form-control-rounded" value="{{ $shift->end_time1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="add">
                        <div class="row pt-3">
                            <div class="col-md-3">
                                <label for="input-7">Thời gian bắt đầu II</label>
                                <input name="start_time2" type="time" class="form-control form-control-rounded" value="{{ $shift->start_time2 }}">
                            </div>
                            <div class="col-md-3">
                                <label for="input-9">Thời gian kết thúc II</label>
                                <input name="end_time2" type="time" class="form-control form-control-rounded" value="{{ $shift->end_time2 }}">
                            </div>
                        </div>
                    </div>
                    <div class="add">
                        <div class="row pt-3">
                            <div class="col-md-4">
                                <label for="input-7">Thời gian gian đi sớm, về trễ (Tính bằng phút)</label>
                                <input name="overtime" type="number" class="form-control form-control-rounded" value="{{ $shift->overtime }}">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-5"  id="add_group">Lưu</button>
            </form>
        </div>
        {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
        </div> --}}
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            {{-- <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>       
                            <div class="table-responsive">
                            <label for="startDate">Chọn tháng/năm</label>
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
                                    <tbody id="table_shifts">
                                        @foreach($members as $key=>$member)
                                        <tr>
                                            <td>{!! $member['name'] !!}</td>
                                            @foreach ($member->ShiftName as $key => $item)                                   
                                                <td>
                                                    <a href="javascript:void(0)" class="get_data" data-member_id="{{ $member->id }}" data-date="{{ $item['full_date'] }}" data-shift="{{$item['ShiftName']}}" data-toggle="modal" data-target="#modalUpdate">{{$item['ShiftName']}}</a>
                                                </td>
                                            @endforeach            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="start_date">
                                <label>Ngày bắt đầu</label>
                                <input value="" type="date" id="md_start_date">
                            </div>
                            <div class="end_date">
                                <label>Ngày kết thúc</label>
                                <input value="" type="date" id="md_end_date">
                            </div>
                            <input value="" id="md_id" type="hidden" name="member_id">
                            <div class="select-shift">
                                <label>Chọn ca</label>
                                <select id="shifts">
                                    @foreach ($group_shift as $item)
                                        <option name="group" value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach 
                                </select>
                            </div>                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn_modal_del" class="btn btn-danger" data-dismiss="modal">Xóa</button>
                            <button type="button" id="btn_modal_update" class="btn btn-success">Cập nhật</button>
                        </div>
                </div>
            </div>

    </div>
    <!-- End Modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <script>
        $("#datepicker").datepicker({         
            autoclose: true,         
            todayHighlight: true 
        }).datepicker('update', new Date());

        $("#datepicker2").datepicker({         
            autoclose: true,         
            todayHighlight: true 
        }).datepicker('update', new Date());

        $("#datepicker3").datepicker({
            format: "yyyy-mm",
            startView: "months", 
            minViewMode: "months", 
        });
        $('#datepicker3').change(function(){
            $('.form-view').find('input[type=submit]').click();
            // $('#nav-contact').dialog();
        });
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

        $('.get_data').click(function(){
            $('#md_id').val($(this).data('member_id'));
            $('#md_date').val($(this).data('date'));
            $('#md_start_date').val($(this).data('date'));
            $('#md_end_date').val($(this).data('date'));
        });

        $('#btn_modal_del').click(function(){
            var member_id = $('#md_id').val();
            var start_date = $('#md_start_date').val();
            var end_date = $('#md_end_date').val();
            var group = $('#shifts').val();
             
            $.ajax({
                type: "POST",
                url : "{!! route('backend.shift.destroy') !!}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "member_id" : member_id,
                    "start_date" : start_date,
                    "end_date" : end_date,
                    "group": group
                },
                success: function(response){
                    alert(response.success);
                    location.reload();
                }
            });
            
        });

        $('#btn_modal_update').click(function(){
            var member_id = $('#md_id').val();
            var start_date = $('#md_start_date').val();
            var end_date = $('#md_end_date').val();
            var group = $('#shifts').val();
     
            $.ajax({
                type: "POST",
                url: "{!! route('backend.shift.update') !!}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "member_id" : member_id,
                    "start_date" : start_date,
                    "end_date" : end_date,
                    "group": group
                },
                success: function(response){

                    alert(response.success);
                    location.reload();
                    
                }        
            });
        });
        
        $(document).ready(function(){
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            console.log(activeTab)
            if(activeTab){
                $('#nav-tab a[href="' + activeTab + '"]').tab('show');
            }
        });

    </script>

@endsection