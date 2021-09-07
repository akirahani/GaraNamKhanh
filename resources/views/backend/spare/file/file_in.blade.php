@extends('backend.layouts.index')
@section('content')
    @foreach($pns as $pn)
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã phiếu nhập</th>
                <th scope="col">Ngày nhập</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">{{$pn->id}}</td>
                <td scope="col">{{$pn->created_at}}</td>
                <td scope="col">
                    <a class="btn btn-info"href="{{url('/admin/file/in/detail',$pn->id)}}">
                        <i class="fas fa-eye" style="font-size:15px"></i>
                    </a>
                </td>
            </tr>
        </tbody>
        </table>
    @endforeach
@endsection