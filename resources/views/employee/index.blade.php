@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Employees</h1>
  </div>
  <div class="row">
    <a href="/employee/form" class="btn btn-success" role="button" aria-pressed="true">Add Employee</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <td scope="col">Staff ID</td>
        <td scope="col">Work Place</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($employees as $employee)
      <tr>
        <td><a href="/staff/detail/{{$employee->staff_id}}">{{$employee->staff_id}}</a></td>
        <td><a href="/store/detail/{{$employee->store_workON}}">{{$employee->store_workON}}</a></td>
        <td>
        <a href="/employee/detail/{{$employee->staff_id}}/{{$employee->store_workON}}" class="btn btn-secondary" role="button" aria-pressed="true">Deatail</a>
        <a href="/employee/edit/{{$employee->staff_id}}/{{$employee->store_workON}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/employee/delete/{{$employee->staff_id}}/{{$employee->store_workON}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@stop
