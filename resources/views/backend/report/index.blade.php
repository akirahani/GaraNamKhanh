@extends('backend.layouts.index')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
<label for="startDate">Month/Year</label>
<form action="{{url('/admin/report')}}" method="GET">
  <input type="text" class="form-control" name="datepicker"  id="datepicker" autocomplete="off" value="@if(isset($_GET['datepicker'])) {{$_GET['datepicker']}} @endif ">
  <input type="submit" id="submit" hidden >
</form>
<table class="table" >
  <tdead>

    <tr>
      <td scope="col">#</td>
    @foreach($day_arrs as $day_arr )
      <th scope="row">{!! $day_arr['date'] !!}</th>
    @endforeach

      <th scope="col"><b>HC</b></th>
      <th scope="col"><b>TC</b></th>
      <th scope="col"><b>Tổng</b></th>
    </tr>
 
  </tdead>


  <tbody>

  @foreach($members as $key=>$value)
    <tr>
      <td scope="col"><a href="{{ url('/admin/report/detail/'.$value->id)}}">{{$value->name}}</a></td>
    
      @foreach($value['daytime'] as $timeg)
        <td scope="col">
          {{ $timeg['daytime'] }}
        </td>
      @endforeach
        <td scope="col">
        </td>
        <td scope="col">
        </td>
        @foreach($value['total'] as $total)
        <td scope="col">
          {{$total['total']}}
        </td>
        @endforeach
    </tr>
    @endforeach
  </tbody>
</table>
<script>
    $("#datepicker").datepicker({
    format: "yyyy-mm",
    startView: "months", 
    minViewMode: "months", 
  });
  $('#datepicker').change(function(){
      $('form').find('input[type=submit]').click();
  });
  </script>
@endsection