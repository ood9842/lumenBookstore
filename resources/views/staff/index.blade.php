@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Person ID</th>
      <th>Staff ID</th>
      <th>Staff name</th>
      <th>Salary</th>
      <th>Work date</th>
    </tr>
    @foreach ($staffs as $staff)
    <tr>
      <th>{{$staff->person_id}}</th>
      <th>{{$staff->S_id}}</th>
      <th>{{$staff->S_id}}</th>
      <th>{{$staff->salary}}</th>
      <th>{{$staff->work_on}}</th>
      <th><a href="/staff/detail/{{$staff->S_id}}">detail</a></th>
      <th><a href="/staff/edit/{{$staff->S_id}}">edit</a></th>
      <th><a href="/staff/delete/{{$staff->S_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/staff/form">add staff</a></button></center>
@stop
