@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{url('/admin/car/type/update')}}" method="POST">
                @csrf
                <div class="row car_type_edit">
                    <input name="id" type="text" value="{{$type->id}}" class="form-control form-control-rounded" id="input-6" hidden>
                    <div class="form-group col-6">
                        <label for="input-6">Tên loại xe</label>
                        <input name="name_type" value="{{$type->name_type}}" type="text" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Dòng xe</label>
                        <input name="vehicles" value="{{$type->vehicles}}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-round px-5"></i>
                            Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection