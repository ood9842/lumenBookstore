@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Staff ID</th>
      <th>Manage store</th>
    </tr>
    @foreach ($managers as $manager)
    <tr>
      <th>{{$manager->staff_id}}</th>
      <th>{{$manager->store_manageON}}</th>
      <th><a href="/manager/detail/{{$manager->staff_id}}">detail</a></th>
      <th><a href="/manager/edit/{{$manager->staff_id}}">edit</a></th>
      <th><a href="/manager/delete/{{$manager->staff_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/manager/form">add manager</a></button></center>
@stop
