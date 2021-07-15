@extends('backend.layouts.index')
@section('content')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('backend.member.create') }}">
                    <button>Thêm</button>
                </a>
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Tài khoản</th>
                                <th scope="col">Tác vụ</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($member as $key => $item)
                                <tr>
                                    <td scope="row">{{ $member->firstItem() + $key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        
                                        <a href="{{ route('backend.member.edit',$item->id) }}">
                                            <button type="button">Sửa</button>
                                        </a>
                                        <a href="{{ route('backend.member.destroy',$item->id) }}">
                                            <button type="button" >Xóa</button>
                                        </a>
                                    </td>
                                </tr>    
                                @endforeach            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection