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
                <div class="row supplier-update">
                    <div class="form-group col-6">
                        <label for="input-6">Tên nhà cung cấp</label>
                        <input name="name" value="{{ $supplier->name }}" type="text" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Địa chỉ</label>
                        <input name="address" value="{{ $supplier->address }}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Liên hệ</label>
                        <input name="phone" value="{{ $supplier->phone}}" pattern="[0-9]{10}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Email</label>
                        <input name="email" value="{{ $supplier->email }}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Website</label>
                        <input name="website" value="{{ $supplier->website }}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Mã số thuế</label>
                        <input name="tax_code" value="{{ $supplier->tax_code }}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                            <label for="input-10">Ghi chú</label>
                            <input name="note" type="text" value="{{ $supplier->note}}" class="form-control form-control-rounded" id="input-10">
                        </div>
                    <div class="form-group col-6">
                        <label for="input-10">Đánh giá</label>
                        <select class="form-select"   aria-label="Default select example" name="rating"  >
                                    @foreach(\App\Supplier::rating as $val)
                                        <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                                    @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-round px-5"></i>Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection