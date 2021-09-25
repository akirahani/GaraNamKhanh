@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{url('/admin/car/company/update')}}" method="POST">
                @csrf
                <div class="company-info row">
                    <input name="id" type="text" value="{{$company->id}}" class="form-control form-control-rounded" id="input-6" hidden>
                    <div class="form-group col-6">
                        <label for="input-6">Tên công ty BH</label>
                        <input name="name" type="text" value="{{$company->name}}" class="form-control form-control-rounded" id="input-6">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Email</label>
                        <input name="email" type="text" value="{{$company->email}}" class="form-control form-control-rounded" id="input-7">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Website</label>
                        <input name="website" type="text" value="{{$company->website}}" class="form-control form-control-rounded" id="input-7">
                    </div>
                    <div class="form-group col-6">
                    <label for="input-9">Địa chỉ</label>
                        <input name="address" value="{{$company->address}}" type="text" class="form-control form-control-rounded" id="input-9">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Số điện thoại</label>
                        <input name="phone" type="text" value="{{$company->phone}}" pattern="[0-9]{10}" class="form-control form-control-rounded" id="input-9">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Mã số thuế</label>
                        <input name="tax_code" type="text" value="{{$company->tax_code}}" class="form-control form-control-rounded" id="input-9">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Đánh giá</label>
                        <select class="form-select"   aria-label="Default select example" name="rating"  >
                            @foreach(\App\InsuranceCompany::rating as $val)
                                <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Ghi chú</label>
                        <input name="note" type="text" value="{{$company->note}}"  class="form-control form-control-rounded" id="input-9">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success btn-round px-5"></i>
                       Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection