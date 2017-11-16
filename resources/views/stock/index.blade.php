@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Stock List</h1>
  </div>
  <div class="row">
    <a href="/stock/form" class="btn btn-success" role="button" aria-pressed="true">Add Store</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
  <table class="table table-bordered">
    <div class="w3-container w3-white" >
    <tr>
      <td scope="col">Stock ID</td>
      <td scope="col">Number Of Books</td>
      <td scope="col">Location</td>
      <td scope="col">Operations</td>
    </tr>
    @foreach ($stocks as $stock)
    <tr>
      <td>{{$stock->Stock_id}}</td>
      <td>{{$stock->number_of_books}}</td>
      <td>{{$stock->location}}</td>
      <td>
      <a href="/stock/detail/{{$stock->Stock_id}}" class="btn btn-secondary" role="button" aria-pressed="true">detail</a>
      <a href="/stock/edit/{{$stock->Stock_id}}" class="btn btn-primary" role="button" aria-pressed="true">edit</a>
      <a href="/stock/delete/{{$stock->Stock_id}}" class="btn btn-danger" role="button" aria-pressed="true">delete</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@stop
