@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Store List</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/store/form" class="btn btn-success" role="button" aria-pressed="true">Add Store</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <div class="w3-container w3-white" >
    <tr>
      <td scope="col">Store ID</td>
      <td scope="col">Address</td>
      <td scope="col">Stock ID</td>
      <td scope="col">Operations</td>
    </tr>
    <tbody id="myTable">
    @foreach ($stores as $store)
    <tr>
      <td>{{$store->Store_id}}</td>
      <td>{{$store->address}}</td>
      <td><a href="/stock/detail/{{$store->stock_id}}">{{$store->stock_id}}</a></td>
      <td>
      <a href="/store/detail/{{$store->Store_id}}" class="btn btn-secondary" role="button" aria-pressed="true">detail</a>
      <a href="/store/edit/{{$store->Store_id}}" class="btn btn-primary" role="button" aria-pressed="true">edit</a>
      <a href="/store/delete/{{$store->Store_id}}" class="btn btn-danger" role="button" aria-pressed="true">delete</a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop
