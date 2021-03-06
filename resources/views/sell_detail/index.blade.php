@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Sell details</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/sell_detail/form" class="btn btn-success" role="button" aria-pressed="true">Add Sell detail</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
  <table class="table table-bordered">
    <div class="w3-container w3-white" >
    <tr>
      <td scope="col">Sell Logs ID</td>
      <td scope="col">Book ID</td>
      <td scope="col">Book Name</td>
      <td scope="col">Price</td>
      <td scope="col">Amount</td>
      <td scope="col">Total Line</td>
      <td scope="col">Operations</td>
    </tr>
    <tbody id="myTable">
    @foreach ($sell_details as $sell_detail)
    <tr>
      <td><a href="/sell_log/detail/{{$sell_detail->sell_logs_id}}">{{$sell_detail->sell_logs_id}}</a></td>
      <td><a href="/book/detail/{{$sell_detail->book_id}}">{{$sell_detail->book_id}}</a></td>
      <td>{{$sell_detail->book_name}}</td>
      <td>{{$sell_detail->price}}</td>
      <td>{{$sell_detail->amount}}</td>
      <td>{{$sell_detail->total_line}}</td>
      
      <td>
      <a href="/sell_detail/detail/{{$sell_detail->sell_logs_id}}/{{$sell_detail->book_id}}" class="btn btn-secondary" role="button" aria-pressed="true">detail</a>
      <a href="/sell_detail/edit/{{$sell_detail->sell_logs_id}}/{{$sell_detail->book_id}}" class="btn btn-primary" role="button" aria-pressed="true" >edit</a>
      <a href="/sell_detail/delete/{{$sell_detail->sell_logs_id}}/{{$sell_detail->book_id}}"  class="btn btn-danger" role="button" aria-pressed="true">delete</a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
 </div>
@stop
