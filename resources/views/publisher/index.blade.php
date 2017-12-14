@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Publisher List</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/publisher/form" class="btn btn-success" role="button" aria-pressed="true">Add Publisher</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <td scope="col">Publisher ID</td>
        <td scope="col">Publisher Name</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach ($publishers as $publisher)
      <tr>
        <td>{{$publisher->Publisher_id}}</</td>
        <td>{{$publisher->publisher_name}}</td>
        <td>
        <a href="/publisher/detail/{{$publisher->Publisher_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Detail</a>
        <a href="/publisher/edit/{{$publisher->Publisher_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/publisher/delete/{{$publisher->Publisher_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@stop
