@extends('backend.layouts.index')
@section('content')
<index type="text" name="id" value="{{$member->id}}">
<table class="table">
  <tdead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Time In</th>
      <th scope="col">Time Out</th>
    </tr>
  </tdead>
  <tbody>
  @foreach($attendance as $key=> $att)
  @php
   
    $key++
   
  @endphp
    <tr>
      <th scope="col">{{ $key++ }}</th>
      <td scope="col">
        {!! $att->date!!}
      </td>
      <td scope="col">
        {!! $att->time_in!!}
      </td>
      <td scope="col">
        {!!$att->time_out!!}
      </td>
   
    </tr>
   @endforeach 
   
    
  </tbody>
</table>
@endsection