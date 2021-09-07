@extends('backend.layouts.index')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <form action="{{ route('backend.spare.type.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input-6"></label>
                    <input hidden value="{{$type_spare->id}}" name="id" type="text" class="form-control form-control-rounded" id="input-6">
                </div>
                <div class="form-group">
                    <label for="input-6">Serial</label>
                    <input value="{{$type_spare->serial}}" name="serial" type="text" class="form-control form-control-rounded" id="input-6">
                </div>
                <div class="form-group">
                    <label for="input-7">Model</label>
                    <input value="{{$type_spare->model}}" name="model" type="text" class="form-control form-control-rounded" id="input-7">
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