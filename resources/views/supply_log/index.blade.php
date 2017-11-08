@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Supply log ID</th>
      <th>Stock ID</th>
      <th>Product line ID</th>
      <th>Date</th>
      <th>total payment</th>
      <th>Sent or back</th>
    </tr>
    @foreach ($supply_logs as $supply_log)
    <tr>
      <th>{{$supply_log->Slogs_id}}</th>
      <th>{{$supply_log->stock_id}}</th>
      <th>{{$supply_log->product_line_id}}</th>
      <th>{{$supply_log->supply_date}}</th>
      <th>{{$supply_log->total_payment}}</th>
      <th>{{$supply_log->sentOrback}}</th>
      <th><a href="/supply_log/detail/{{$supply_log->Slogs_id}}">detail</a></th>
      <th><a href="/supply_log/edit/{{$supply_log->Slogs_id}}">edit</a></th>
      <th><a href="/supply_log/delete/{{$supply_log->Slogs_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/supply_log/form">add supply log</a></button></center>
@stop
