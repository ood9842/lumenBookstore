@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Sell Logs ID</th>
      <th>Book ID</th>
      <th>Book Name</th>
      <th>Price</th>
      <th>Amount</th>
      <th>Total Line</th>
    </tr>
    @foreach ($sell_details as $sell_detail)
    <tr>
      <th>{{$sell_detail->sell_logs_id}}</th>
      <th>{{$sell_detail->book_id}}</th>
      <th>{{$sell_detail->book_name}}</th>
      <th>{{$sell_detail->price}}</th>
      <th>{{$sell_detail->amount}}</th>
      <th>{{$sell_detail->total_line}}</th>
      <th><a href="/sell_detail/detail/{{$sell_detail->sell_logs_id}}/{{$sell_detail->book_id}}">detail</a></th>
      <th><a href="/sell_detail/edit/{{$sell_detail->sell_logs_id}}/{{$sell_detail->book_id}}">edit</a></th>
      <th><a href="/sell_detail/delete/{{$sell_detail->sell_logs_id}}/{{$sell_detail->book_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/sell_detail/form">add sell detail</a></button></center>
@stop
