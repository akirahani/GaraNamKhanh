@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title"></div>
            <hr>
            <form action="{{ route('backend.supplier.update') }}" method="POST">
                @csrf
                    <input name="id" value="{{ $supplier->id }}" type="hidden" class="form-control form-control-rounded" id="input-6">
                <div class="form-group">
                    <label for="input-6">Tên nhà cung cấp</label>
                    <input name="name" value="{{ $supplier->name }}" type="text" class="form-control form-control-rounded" id="input-6">
                </div>
                <div class="form-group">
                    <label for="input-7">Địa chỉ</label>
                    <input name="address" value="{{ $supplier->address }}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <label for="input-7">Liên hệ</label>
                    <input name="phone" value="{{ $supplier->phone}}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <label for="input-7">Email</label>
                    <input name="email" value="{{ $supplier->email }}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <label for="input-7">Website</label>
                    <input name="website" value="{{ $supplier->website }}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <label for="input-7">Mã số thuế</label>
                    <input name="tax_code" value="{{ $supplier->tax_code }}" type="text" class="form-control form-control-rounded" id="input-7">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"></i>Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection