@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Staff ID</th>
      <th>Work Place</th>
    </tr>
    @foreach ($employees as $employee)
    <tr>
      <th><a href="/staff/detail/{{$employee->staff_id}}">{{$employee->staff_id}}</a></th>
      <th><a href="/store/detail/{{$employee->store_workON}}">{{$employee->store_workON}}</a></th>
      <th><a href="/employee/detail/{{$employee->staff_id}}/{{$employee->store_workON}}">detail</a></th>
      <th><a href="/employee/edit/{{$employee->staff_id}}/{{$employee->store_workON}}">edit</a></th>
      <th><a href="/employee/delete/{{$employee->staff_id}}/{{$employee->store_workON}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/employee/form">add employee</a></button></center>
@stop
