@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <h3 style="text-align: center"> Lịch hẹn </h3>
        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                        <div id='calendar'>
                                
                        </div>
                <div class="overlay toggle-menu"></div> 
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle" style="color:black">Lịch hẹn</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                        <form id ="modal-main">
                               {{csrf_field()}}
                     
                               <div class="form-group">
                                    <input style="background-color:#bbbb" type="hidden" name="id" id="id"   value="" class="form-control" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="type_date" style="color:black">Khách hàng</label>
                                    <input style="background-color: #66aac3;" type="text" id="customer"  value=""  class="form-control" required >
                                </div>
                                <div class="form-group">
                                    <label for="type_date" style="color:black">Số điện thoại</label>
                                        <input style="background-color: #66aac3;" type="text" id="phone"  value=""  class="form-control" required >
                                </div>
                                <div class="form-group">
                                    <label for="type_date" style="color:black">Biển số xe</label>
                                        <input style="background-color: #66aac3;" type="text" id="license_plate"  value=""  class="form-control" required >
                                </div>
                                <div class="form-group">
                                    <label for="date" style="color:black" >Thời gian sớm nhất có thể</label>
                                    <input style="background-color: #66aac3;" type="datetime" id="start_time"  value=""  class="form-control" required >
                                </div>
                                <div class="form-group">
                                        <label for="date" style="color:black" >Thời gian muộn nhất có thể</label>
                                <input type="datetime" style="background-color: #66aac3;"  id="end_time" disabled value="" required="required"  class="form-control">
                                </div>
                                <!-- <input type="text" style="background-color: #66aac3;"  id="date"  required="required"  class="form-control"> -->
                                <div class="form-group">
                                        <label for="date" style="color:black" >Trạng thái</label>
                               
                                        <input type="text" style="background-color: #66aac3;"  id="status" disabled value="{{App\Schedule::status1['name']}}" required="required"  class="form-control">
                                  
                                </div>
                                <div class="form-group">
                                        <label for="date" style="color:black" >Nội dung bảo dưỡng</label>
                                        <input type="text" style="background-color: #66aac3;"  id="content" value="" required="required"  class="form-control">
                                </div>

                                <div class="form-group" style="margin-left:45%">
                                    <ul style=" list-style: none; display:flex;">
                                        <li style=" padding: 2px">
                                            <button type="button" id="submit" class="btn btn-success" >Xác nhận</button>
                                        </li>
                                        <li style=" padding: 2px">
                                            <button type="button" id="suggestions" class="btn btn-warning">Gợi ý lịch</button>
                                        </li>
                                    </ul>
                                </div>
                 
                                </form>
                        </div>
                        </div>
                </div>
        </div>
            </div>
        </div>
    </div>
</div>


<script>
     $(document).ready(function() {
        var events = {!!$schedules!!};
        var info = {!!$customer_info!!};
        console.log(info);
        $('#calendar').fullCalendar
        ({           
                        editable: true,
                        header:{
                                left: 'prev, next today',
                                center: 'title',
                                right:'month, agendaWeek, agendaDay'
                        },
                        events: function (start, end, tz, callback) {
                                callback(events);
                        },
                                selectable:true,
                                selectHelper: true,
                        select:function(date,allDay)
                                {
                        
                                // var date = $.fullCalendar.formatDate(date,'DD-MM-Y');
                                // $('#date').val(date);
                                // $("#exampleModalCenter").modal('show');
                                },
                        eventClick: function(info) {
                                var status =$('#status').val(info.status);
                                events.forEach((item,index)=>{
                                       if(info.customer_id == item.member.id){
                                        var customer =$('#customer').val(item.member.name);
                                        var phone =$('#phone').val(item.member.phone);
                                        var license_plate =$('#license_plate').val(item.car.license_plate);
                                    }
                                });
                                var start_time= $('#start_time').val(info.start_time);
                                var end_time= $('#end_time').val(info.end_time);
                                var content= $('#content').val(info.content);
                                var id= $('#id').val(info.id);
                                $("#exampleModalCenter").modal('show');
                        },
        });
        $('#submit').click(function(){
            var status = 1;
            var id =  $('#id').val();
            $.ajax({                                                
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"/admin/schedule/update",
                    type: "POST",
                    data:{
                            id: id,
                            status: status,
                            type: 'update',
                    },
                    success:function(response)
                    {
                            $("#exampleModalCenter").modal('hide');
                            events.forEach((item,index)=>{
                                        if(item.id == id )
                                                events[index].status = status 
                            })
                            events.push({id: response.id , status: status});
                            $('#calendar').fullCalendar('refetchEvents');
                            swal({
                            title: "Cập nhật lịch thành công",
                            icon: "success",
                            
                            });
                            $('#modal-main')[0].reset();
                    }      
            })   
        });
 });    
</script>

    

@endsection