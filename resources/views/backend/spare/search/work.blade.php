@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/admin/work/insert') }}" method="POST">
                @csrf
                <div id="form-add0">
                    <div class="add0">
                        <div class="title-work">
                            <h4>Nội dung công việc</h4>
                        </div>
                        <div class="row work_main mx-auto p-3">
                            <div class="col-5">
                                <div class="label-input">
                                    <label for="input-1">Tên công việc</label>
                                </div>    
                                <div class="insert information">
                                    <input name="name_work[]" type="text" class="form-control form-control-rounded" id="input-1">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="label-input">
                                    <label for="input-2">Tiền công</label>
                                </div>    
                                <div class="insert information">
                                    <input name="wage[]" type="text" class="form-control form-control-rounded" id="input-2">
                                </div>   
                            </div>
                            <div  class="col-1" style="margin-top: 30px;">
                                    <a class="btn-add0" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-plus-circle"></i></a>
                            </div> 
                        </div>
                    </div> 
                </div> 
                <button type="submit" class="btn btn-light btn-round px-5"></i>
                    Thêm CVTK
                </button>
            </form> 
        </div>
    </div>
</div>  
<script>
      $(document).ready(function(){
            $("body").delegate('.btn-add0','click',function(){
                $("#form-add0").append('<div class="add">'+
                                            '<div class="row work_main mx-auto p-3">'+
                                                '<div class="col-5">'+
                                                    '<div class="label-input">'+
                                                    '<label for="input-1">Tên công việc</label>'+
                                                    '</div>'+
                                                    '<div class="insert information">'+
                                                    '<input name="name_work[]" type="text" class="form-control form-control-rounded" id="input-1">'+
                                                    '</div>'+
                                                '</div>'+
                                                ' <div class="col-3">'+
                                                    '<div class="label-input">'+
                                                    '<label for="input-2">Tiền công</label>'+
                                                    '</div>'+
                                                    '<div class="insert information">'+
                                                    '<input name="wage[]" type="text" class="form-control form-control-rounded" id="input-2">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div  class="col-1" style="margin-top: 30px;">'+
                                                    '<a class="remove0" href="javascript:void(0)" style="font-size: 30px"><i class="fas fa-minus-circle"></i></a>'+
                                                '</div>');
                $('.remove0').click(function(){
                        $(this).parent().parent().remove();
                });
            });
  
       
        });
   
</script>
@endsection