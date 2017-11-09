@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Supply Logs ID</th>
      <th>Book ID</th>
      <th>Book Name</th>
      <th>Price</th>
      <th>Amount</th>
      <th>Total Line</th>
    </tr>
    @foreach ($supply_details as $supply_detail)
    <tr>
      <th>{{$supply_detail->slogs_id}}</th>
      <th>{{$supply_detail->book_id}}</th>
      <th>{{$supply_detail->book_name}}</th>
      <th>{{$supply_detail->price}}</th>
      <th>{{$supply_detail->amount}}</th>
      <th>{{$supply_detail->total_line}}</th>
      <th><a href="/supply_detail/detail/{{$supply_detail->slogs_id}}/{{$supply_detail->book_id}}">detail</a></th>
      <th><a href="/supply_detail/edit/{{$supply_detail->slogs_id}}/{{$supply_detail->book_id}}">edit</a></th>
      <th><a href="/supply_detail/delete/{{$supply_detail->slogs_id}}/{{$supply_detail->book_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/supply_detail/form">add supply detail</a></button></center>
@stop
