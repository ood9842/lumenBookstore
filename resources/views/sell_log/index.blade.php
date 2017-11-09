@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Sell log ID</th>
      <th>Stock ID</th>
      <th>Customer ID</th>
      <th>Date</th>
      <th>total payment</th>
    </tr>
    @foreach ($sell_logs as $sell_log)
    <tr>
      <th>{{$sell_log->Sell_logs_id}}</th>
      <th>{{$sell_log->stock_id}}</th>
      <th>{{$sell_log->customer_id}}</th>
      <th>{{$sell_log->sell_date}}</th>
      <th>{{$sell_log->total_payment}}</th>
      <th><a href="/sell_log/detail/{{$sell_log->Sell_logs_id}}">detail</a></th>
      <th><a href="/sell_log/edit/{{$sell_log->Sell_logs_id}}">edit</a></th>
      <th><a href="/sell_log/update_detail/{{$sell_log->Sell_logs_id}}">update</a></th>
      <th><a href="/sell_log/delete/{{$sell_log->Sell_logs_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/sell_log/form">add sell log</a></button></center>
@stop
