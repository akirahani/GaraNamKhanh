@extends('backend.layouts.index')
@section('content')
        <div class="clearfix"></div>
                <div class="container-fluid">
                        <div id='calendar'>
                                
                        </div>
                <div class="overlay toggle-menu"></div> 
        </div>
        
     

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle" style="color:black">Thêm lịch</h5>
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
                                <label for="type_date" style="color:black">Kiểu ngày</label>
                                <select class="form-select" style="background-color: #66aac3;;"  aria-label="Default select example" name="type_date" id="type_date"  >
                                   @foreach(App\Calendar::type_date as $val)
                                        <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                                    @endforeach    
                                </select>
                                </div>
                                <div class="form-group">
                                        <label for="date" style="color:black" >Tiêu đề</label>
                                <input style="background-color: #66aac3;;" type="text" name="title" id="title"  value=""  class="form-control" required >
                                </div>
                                <div class="form-group">
                                        <label for="date" style="color:black" >Ngày</label>
                                <input type="text" style="background-color: #66aac3;;" name="date" id="date" disabled value="" required="required"  class="form-control">
                                </div>
                                <div class="form-group">
                                <button type="button" id="submit" class="btn btn-success">Thêm</button>
                                </div>
                                </form>
                        </div>
                        </div>
                </div>
        </div>
        <!--  -->
        <div class="modal fade" id="form_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle" style="color:black">Cập nhật lịch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                        <form id ="modal-main">
                               {{csrf_field()}}
                               <div class="form-group">
                                <input style="background-color:#bbbb" hidden type="text" name="id" id="id2"   value="" class="form-control" disabled>
                                </div>
                                <div class="form-group">
                                <label for="type_date" style="color:black">Kiểu ngày</label>
                                <select class="form-select" style="background-color: #66aac3;" aria-label="Default select example"  name="type_date" id="type_date2"  >
                                   @foreach(App\Calendar::type_date as $val)
                                        <option style="background-color:white"  value="{{$val['id']}}">{{$val['name']}}</option>
                                    @endforeach    
                                </select>
                                </div>
                                <div class="form-group">
                                        <label for="date" style="color:black" >Tiêu đề</label>
                                <input style="background-color: #66aac3;; color:black" type="text" name="title" id="title2"  value=""  class="form-control" required>
                                </div>
                                <div class="form-group">
                                        <label for="date" style="color:black" >Ngày</label>
                                <input type="text" style="background-color: #66aac3;;" name="date" id="date2" disabled value=""   class="form-control" required>
                                </div>
                                <div class="form-group">
                                <button type="button" id="submit1" class="btn btn-success">Cập nhật</button>
                                </div>
                                </form>
                        </div>
                        </div>
                </div>
        </div>
        <!--  -->
        
        <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle" style="color:black">Chi tiết</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                        <form id ="modal-main">
                               {{csrf_field()}}
                               <div class="form-group">
                                        <input  id="id1"  hidden disabled>
                                </div>
                                <div class="form-group">
                                        <label for="type_date" style="color:black">Kiểu ngày</label>
                                        <input   id="type_date1" disabled>
                                </div>
                                <div class="form-group">
                                        <label for="date" style="color:black" >Tiêu đề</label>
                                        <input   style=" color:black " id="title1"  value=""  disabled >
                                </div>
                                <div class="form-group">
                                        <label for="date" style="color:black" >Ngày</label>
                                        <input  id="date1" disabled >
                                </div>
                                <div class="form-group">
                                        <button type="button" id="update_modal" class="btn btn-info">  <i class="fas fa-edit"></i></button>
                                        <button type="button" id="remove" class="btn btn-danger">     <i class="fas fa-trash-alt"></i></button>
                                </div>
                                </form>
                        </div>
                        </div>
                </div>
        </div>
        <script>
 
                $(document).ready(function() {
                       var events = {!!$calendar!!};
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
                                       
                                               var date = $.fullCalendar.formatDate(date,'Y-MM-DD');
                                               $('#date').val(date);
                                               $('#title').val('');
                                               $("#exampleModalCenter").modal('show');
                                               },
                                       eventClick: function(info) {
                                               var type_date1 =$('#type_date1').val(info.type_date);
                                               var title1= $('#title1').val(info.title);
                                               var date1 = $('#date1').val($.fullCalendar.formatDate(info.start,'Y-MM-DD'));
                                               var id1= $('#id1').val(info.id);
                                           
                                               $("#detail").modal('show');
                                               var id2= $('#id2').val(info.id);
                                               var type_date2 =$('#type_date2').val(info.type_date);
                                               var title2= $('#title2').val(info.title);
                                               var date2 = $('#date2').val($.fullCalendar.formatDate(info.start,'Y-MM-DD'));
                                          
                                          
                                       },
                                   
                       
                       });
                               $('#submit').click(function()
                               {
                                       
                                       var type_date = $('#type_date').val();
                                       var title = $('#title').val();
                                       var date = $('#date').val();
                                       $.ajax({                                                
                                               headers: {
                                                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                               },
                                               url:"/admin/calendar/action",
                                               type: "POST",
                                               data:{
                                                       type_date: type_date,
                                                       title:title,
                                                       date: date,
                                                       type: 'add',
                                                       
                                               },
                                               success:function(response)
                                               {
                                                       $("#exampleModalCenter").modal('hide');
                                                       events.push({id: response.id ,type_date: type_date,title: title, start: date});
                                                       $('#calendar').fullCalendar('refetchEvents');
                                                       swal({
                                                       title: "Add Event Calendar Success",
                                                       icon: "success",
                                                       
                                                       });
                                                       $('#modal-main')[0].reset();
                                               }      
                                       })     
                               }); 
                               $('#submit1').click(function()
                               {
                                       var id2 = $('#id2').val();
                                       var type_date1 = $('#type_date2').val();
                                       var title1 = $('#title2').val();
                                       var date1 = $('#date2').val();
                                       $.ajax({
                                               headers: {
                                                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                               },
                                               url:"/admin/calendar/action",
                                               type: "POST",
                                               data:{
                                                       type_date: type_date1,
                                                       title:title1,
                                                       date: date1,
                                                       id:id2, 
                                                       type: 'update',
                                                       
                                               },
                                               success:function(response)
                                               {   
                                                       $("#form_update").modal('hide');
                                                       events.forEach((item,index)=>{
                                                               if(item.id == id2 )
                                                                       events[index].title = title1 
                                                       })
                                                       $('#calendar').fullCalendar('refetchEvents');
                                                       swal({
                                                       title: " Event Calendar has been Updated ",
                                                       icon: "success",
                                                       
                                                       });
                                                       $('#modal-main')[0].reset();
                                               }      
                                               })
                               });   
               
                               $('#update_modal').click(function(){
                                       $('#detail').modal('hide');
                                       var type_date2 =$('#type_date2').val();
                                       var title2= $('#title2').val();
                                       var date2 = $('#date2').val();
                                       var id1= $('#id1').val();
                                  
                                       $('#form_update').modal('show');
                                       
                               });
                               $('#remove').click(function(){
                                  
                                       var crm = confirm( 'Do you want to delete event?');
                                       if(crm==true){  
                                               var id1 = $('#id1').val();      
                                               $.ajax({
                                                       
                                                       headers: {
                                                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                       },
                                                       url:"/admin/calendar/action",
                                                       type: "POST",
                                                       data:{
                                                       
                                                               id:id1, 
                                                               type: 'delete',
                                                               
                                                       },
                                                       success:function(response)
                                                       {   
                                                      
                                                               $("#detail").modal('hide');
                                                       
                                                               events= events.filter(val => val.id != id1);   
                                                               $('#calendar').fullCalendar('refetchEvents');
                                                               swal({
                                                               title: " This day has been Deleted  ",
                                                               icon: "success",
                                                               
                                                               });
                                                       
                                                             
                                                       }      
                                                       })
                                       }       
                                    
                               });   
               
                       });      
               </script>  
  
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
