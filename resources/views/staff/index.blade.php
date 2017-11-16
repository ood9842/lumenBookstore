@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Staff</h1>
  </div>
  <div class="row">
    <a href="/staff/form" class="btn btn-success" role="button" aria-pressed="true">Add Staff</a>
  </div>
</div>
@stop
@section('content')
  <table class="table table-bordered table-responsive">
    <div class="w3-container w3-white" >
    <tr>
      <td scope="col">Person ID</td>
      <td scope="col">Staff ID</td>
      <td scope="col">Salary</td>
      <td scope="col">Work date</td>
      <td scope="col">Operations</td>
    </tr>
    @foreach ($staffs as $staff)
    <tr>
      <td><a href="/person/detail/{{$staff->person_id}}">{{$staff->person_id}}</a></td>
      <td>{{$staff->S_id}}</td>
      <td>{{$staff->salary}}</td>
      <td>{{$staff->work_on}}</td>
      <td>
      <a href="/staff/detail/{{$staff->S_id}}" class="btn btn-secondary" role="button" aria-pressed="true">detail</a>
      <a href="/staff/edit/{{$staff->S_id}}" class="btn btn-primary" role="button" aria-pressed="true" >edit</a>
      <a href="/staff/delete/{{$staff->S_id}}"  class="btn btn-danger" role="button" aria-pressed="true">delete</a>
      </td>
    </tr>
    @endforeach
  </table>
  <!-- bottom to page create -->
  
@stop
