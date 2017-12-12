@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Customer</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/customer/form" class="btn btn-success" role="button" aria-pressed="true">Add Customer</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <td scope="col">Customer ID</td>
        <td scope="col">Person ID</td>
        <td scope="col">Member ID</td>
        <td scope="col">Points</td>
        <td scope="col">Expired date</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach ($customers as $customer)
      <tr>
      <td>{{$customer->C_id}}</td>
      <td><a href="/person/detail/{{$customer->person_id}}">{{$customer->person_id}}</a></td>
      <td><a href="/store/detail/{{$customer->member_id}}">{{$customer->member_id}}</a></td>
      <td>{{$customer->points}}</td>
      <td>{{$customer->expired_date}}</td>
      <td>
        <a href="/customer/detail/{{$customer->C_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Deatail</a>
        <a href="/customer/detail/{{$customer->C_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/customer/detail/{{$customer->C_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@stop
