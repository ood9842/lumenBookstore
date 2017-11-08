@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Stock ID</th>
      <th>Number Of Books</th>
      <th>Location</th>
    </tr>
    @foreach ($stocks as $stock)
    <tr>
      <th>{{$stock->Stock_id}}</th>
      <th>{{$stock->number_of_books}}</th>
      <th>{{$stock->location}}</th>
      <th><a href="/stock/detail/{{$stock->Stock_id}}">detail</a></th>
      <th><a href="/stock/edit/{{$stock->Stock_id}}">edit</a></th>
      <th><a href="/stock/delete/{{$stock->Stock_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/stock/form">add stock</a></button></center>
@stop
