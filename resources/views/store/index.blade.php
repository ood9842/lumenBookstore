@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Store</h1>
  </div>
  <div class="row">
    <a href="/store/form" class="btn btn-success" role="button" aria-pressed="true">Add Store</a>
  </div>
</div>
@stop
@section('content')
<table class="table table-bordered table-responsive">
    <div class="w3-container w3-white" >
    <tr>
      <td scope="col">Store ID</td>
      <td scope="col">Address</td>
      <td scope="col">Stock ID</td>
      <td scope="col">Operations</td>
    </tr>
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
  </table>
  <!-- bottom to page create -->
  
@stop
