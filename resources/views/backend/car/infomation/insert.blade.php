@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{ route('admin.car.store') }}" method="POST">
                @csrf
       
                <div class= "to-car row">
                    <div class="form-group col-6">
                        <label for="input-6">Biển số xe</label>
                        <input name="license_plate" type="text" class="form-control form-control-rounded" id="input-6">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Tên xe</label>
                        <input name="name" type="text" class="form-control form-control-rounded" id="input-7">
                    </div>
                </div>
                <div class= "to-car row">
                    <div class="form-group col-6">
                        <label for="input-7">Màu sắc</label>
                        <input name="color" type="text" class="form-control form-control-rounded" id="input-7">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-9">Số máy</label>
                        <input name="engine" type="text" class="form-control form-control-rounded" id="input-9">
                    </div>
                </div>
                <div class= "to-car row">
                    <div class="form-group col-6">
                        <label for="input-7">Số khung</label>
                        <input name="chassis" type="text" class="form-control form-control-rounded" id="input-7">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Quãng đường đã đi</label>
                        <input name="run_distance" type="text" class="form-control form-control-rounded" id="input-7">
                    </div>
                </div>
                <div class= "to-car row">
                    <div class="form-group col-6">
                        <label for="input-7">Năm sản xuất</label>
                        <input name="year_manufacture" type="text" class="form-control form-control-rounded" id="input-7">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Công ty bảo hiểm</label>
                        <select class="js-example-placeholder-multiple js-states  form-select" name="id_company">
                                @foreach($company as $item)
                                    <option style="background-color: #fff;">{{$item->id}}- {{$item->name}} </option>
                                @endforeach
                        </select>
                
                    </div>
                </div>
                <div class= "to-car row">
                    <div class="form-group col-6">
                        <label for="input-7">Loại xe</label>
                        <select class="js-example-placeholder-multiple js-states  form-select" name="id_type">
                                @foreach($type as $items)
                                    <option style="background-color: #fff;">{{$items->id}}- {{$items->vehicles}}-{{$items->name_type}} </option>
                                @endforeach
                        </select>
                
                    </div>
                    <div class="form-group col-6">
                        <label for="input-7">Khách hàng</label>
                        <select class="js-example-placeholder-multiple js-states  form-select" name="customer_id">
                                @foreach($customers as $customer)
                                    <option style="background-color: #fff;">{{$customer->id}}- {{$customer->name}} </option>
                                @endforeach
                        </select>
                
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"></i>
                        Thêm</button>
                </div>
            </div>    
            </form>
        </div>
    </div>
</div>
@endsection