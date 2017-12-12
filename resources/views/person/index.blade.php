@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Person</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/person/form" class="btn btn-success" role="button" aria-pressed="true">Add Person</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <td scope="col">Person ID</td>
        <td scope="col">First Name</td>
        <td scope="col">Last Name</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach ($persons as $person)
      <tr>
        <td>{{$person->P_id}}</td>
        <td>{{$person->first_name}}</td>
        <td>{{$person->last_name}}</td>
        <td>
        <a href="/person/detail/{{$person->P_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Deatail</a>
        <a href="/person/edit/{{$person->P_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/person/delete/{{$person->P_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@stop
