@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title"></div>
            <hr>
            <form action="{{ route('backend.customer.update') }}" method="POST">
                @csrf
                    <input name="id" value="{{ $customer->id }}" type="hidden" class="form-control form-control-rounded" id="input-6">
                <div class="form-group">
                    <label for="input-6">Họ và tên</label>
                    <input name="name" value="{{ $customer->name }}" type="text" class="form-control form-control-rounded" id="input-6">
                </div>
                <div class="form-group">
                    <label for="input-7">Email</label>
                    <input name="email" value="{{ $customer->email }}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <!-- <div class="form-group">
                    <label for="input-7">Mật khẩu</label>
                    <input name="password" value="{{ $customer->password }}" type="password" class="form-control form-control-rounded" id="input-7">
                </div> -->
                <div class="form-group">
                    <label for="input-6">Địa chỉ</label>
                    <input name="address" value="{{ $customer->address }}" type="text" class="form-control form-control-rounded" id="input-6">
                </div>
                <div class="form-group">
                    <label for="input-7">Số điện thoại</label>
                    <input name="phone" value="{{ $customer->phone }}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"></i>Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection