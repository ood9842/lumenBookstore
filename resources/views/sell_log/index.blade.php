@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Sell log</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/sell_log/form" class="btn btn-success" role="button" aria-pressed="true">Add Sell Log</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
  <table class="table table-bordered">
    <div class="w3-container w3-white" >
    <tr>
      <td scope="col">Sell log ID</td>
      <td scope="col">Stock ID</td>
      <td scope="col">Customer ID</td>
      <td scope="col">Date</td>
      <td scope="col">total payment</td>
      <td scope="col">Operations</td>
    </tr>
    <tbody id="myTable">
    @foreach ($sell_logs as $sell_log)
    <tr>
      <td>{{$sell_log->Sell_logs_id}}</td>
      <td><a href="/stock/detail/{{$sell_log->stock_id}}">{{$sell_log->stock_id}}</a></td>
      <td><a href="/customer/detail/{{$sell_log->customer_id}}">{{$sell_log->customer_id}}</a></td>
      <td>{{$sell_log->sell_date}}</td>
      <td>{{$sell_log->total_payment}}</td>
      <td>
      <a href="/sell_log/detail/{{$sell_log->Sell_logs_id}}" class="btn btn-secondary" role="button" aria-pressed="true">detail</a>
      <a href="/sell_log/edit/{{$sell_log->Sell_logs_id}}" class="btn btn-primary" role="button" aria-pressed="true">edit</a>
      <a href="/sell_log/update_detail/{{$sell_log->Sell_logs_id}}" class="btn btn-primary" role="button" aria-pressed="true">update</a>
      <a href="/sell_log/delete/{{$sell_log->Sell_logs_id}}" class="btn btn-danger" role="button" aria-pressed="true" >delete</a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop
