@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <!-- <div class="card-title">Round Vertical Form</div> -->
            <hr>
            <form action="{{ route('backend.shift.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input-6">Tên ca</label>
                    <input name="name" type="text" class="form-control form-control-rounded" id="input-6">
                </div>
                <div class="form-group">
                    <label for="input-7">Thời gian bắt đầu</label>
                    <input name="start_time" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <label for="input-9">Thời gian kết thúc</label>
                    <input name="end_time" type="text" class="form-control form-control-rounded" id="input-9">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"></i>
                        Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection