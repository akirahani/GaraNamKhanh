@extends('backend.layouts.index')
@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>       
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Đơn vị tính</th>
                                <th scope="col">Số lượng tồn</th>            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($exists as $key => $item)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $item->dspare->name_spare }}- {{ $item->dsupplier->name }}   {{ $item->dspare->serial }}-{{ $item->dspare->model }}   </td>
                                    <td> {{ $item->dspare->unit}} </td>
                                    <td>{{ $item->amount}}</td>
                                </tr>    
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection