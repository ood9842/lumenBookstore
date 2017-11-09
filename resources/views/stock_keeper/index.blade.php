@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Staff ID</th>
      <th>Work on stock</th>
    </tr>
    @foreach ($stock_keepers as $stock_keeper)
    <tr>
      <th>{{$stock_keeper->staff_id}}</th>
      <th>{{$stock_keeper->stock_workON}}</th>
      <th><a href="/stock_keeper/detail/{{$stock_keeper->staff_id}}">detail</a></th>
      <th><a href="/stock_keeper/edit/{{$stock_keeper->staff_id}}">edit</a></th>
      <th><a href="/stock_keeper/delete/{{$stock_keeper->staff_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/stock_keeper/form">add stock keeper</a></button></center>
@stop
