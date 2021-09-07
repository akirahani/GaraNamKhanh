@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{ url('/admin/spare/base/update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input-6"></label>
                    <input hidden value="{{$references->id}}" name="id" type="text" class="form-control form-control-rounded" id="input-6">
                </div>
                <div class="form-group">
                    <label for="input-6">Tên phụ tùng</label>
                    <input name="name_spare" value="{{$references->name_spare}}" type="text" class="form-control form-control-rounded" id="input-6">
                </div>
                <div class="form-group">
                    <label for="input-7">Đơn vị tính</label>
                    <input name="unit" value="{{$references->unit}}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"></i>
                      Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection