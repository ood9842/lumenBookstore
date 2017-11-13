@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Customer ID</th>
      <th>Person ID</th>
      <th>Member ID</th>
      <th>Points</th>
      <th>Expired date</th>
    </tr>
    @foreach ($customers as $customer)
    <tr>
      <th>{{$customer->C_id}}</th>
      <th><a href="/person/detail/{{$customer->person_id}}">{{$customer->person_id}}</a></th>
      <th><a href="/store/detail/{{$customer->member_id}}">{{$customer->member_id}}</a></th>
      <th>{{$customer->points}}</th>
      <th>{{$customer->expired_date}}</th>
      <th><a href="/customer/detail/{{$customer->C_id}}">detail</a></th>
      <th><a href="/customer/edit/{{$customer->C_id}}">edit</a></th>
      <th><a href="/customer/delete/{{$customer->C_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/customer/form">add customer</a></button></center>
@stop
