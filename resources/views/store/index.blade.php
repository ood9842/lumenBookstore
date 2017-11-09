@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Store ID</th>
      <th>Address</th>
      <th>Stock ID</th>
    </tr>
    @foreach ($stores as $store)
    <tr>
      <th>{{$store->Store_id}}</th>
      <th>{{$store->address}}</th>
      <th><a href="/stock/detail/{{$store->stock_id}}">{{$store->stock_id}}</a></th>
      <th><a href="/store/detail/{{$store->Store_id}}">detail</a></th>
      <th><a href="/store/edit/{{$store->Store_id}}">edit</a></th>
      <th><a href="/store/delete/{{$store->Store_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/store/form">add store</a></button></center>
@stop
