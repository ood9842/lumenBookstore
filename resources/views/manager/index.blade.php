@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Manager List</h1>
  </div>
  <div class="row">
    <a href="/manager/form" class="btn btn-success" role="button" aria-pressed="true">Add Manager</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <td scope="col">Staff ID</td>
        <td scope="col">Manage store</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($managers as $manager)
      <tr>
        <td><a href="/staff/detail/{{$manager->staff_id}}">{{$manager->staff_id}}</a></td>
        <td><a href="/store/detail/{{$manager->store_manageON}}">{{$manager->store_manageON}}</a></td>
        <td>
        <a href="/staff/detail/{{$manager->staff_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Deatail</a>
        <a href="/staff/edit/{{$manager->staff_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/staffdelete/{{$manager->staff_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@stop
