@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{ url('/admin/spare/base/update') }}" method="POST">
                @csrf

                <div class="title-base row">
                    <div class="form-group ">
                        <label for="input-6"></label>
                        <input hidden value="{{$references->id}}" name="id" type="text" class="form-control form-control-rounded" id="input-6">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-6">Tên phụ tùng</label>
                        <input name="name_spare" value="{{$references->name_spare}}" type="text" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Đơn vị tính</label>
                        <input name="unit" value="{{$references->unit}}" type="text" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                                <label for="input-6">Serial</label>
                                <input name="serial" type="text" value="{{$references->serial}}" class="form-control form-control-rounded" id="input-6" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Model</label>
                        <input name="model" type="text" value="{{$references->model}}" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Giá cả</label>
                        <input name="price" type="number" min="10000" value="{{$references->price}}" class="form-control form-control-rounded" id="input-7" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Đánh giá</label>
                        <select class="form-select"   aria-label="Default select example" name="rating"  >
                                    @foreach(\App\Reference::rating as $val)
                                        <option style="background-color:white" value="{{$val['id']}}">{{$val['name']}}</option>
                                    @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="input-7">Ghi chú</label>
                        <input class="form-control" name="note" value="{{$references->note}}" id="exampleFormControlTextarea1" rows="3">
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