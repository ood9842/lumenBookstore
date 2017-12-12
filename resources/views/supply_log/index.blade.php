@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Supply log</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/supply_log/form" class="btn btn-success" role="button" aria-pressed="true">Add Supply log</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
  <div class="w3-container w3-white" >
  <tr>
    <td scope="col">Supply log ID</td>
    <td scope="col">Stock ID</td>
    <td scope="col">Product line ID</td>
    <td scope="col">Date</td>
    <td scope="col">total payment</td>
    <td scope="col">Sent or back</td>
    <td scope="col">Operations</td>
  </tr>
  <tbody id="myTable">
  @foreach ($supply_logs as $supply_log)
  <tr>
    <td>{{$supply_log->Slogs_id}}</td>
    <td><a href="/stock/detail/{{$supply_log->stock_id}}">{{$supply_log->stock_id}}</a></td>
    <td><a href="/product_line/detail/{{$supply_log->product_line_id}}">{{$supply_log->product_line_id}}</a></td>
    <td>{{$supply_log->supply_date}}</td>
    <td>{{$supply_log->total_payment}}</td>
    <td>{{$supply_log->sentOrback}}</td>
    <td>
    <a href="/supply_log/detail/{{$supply_log->Slogs_id}}" class="btn btn-secondary" role="button" aria-pressed="true">detail</a>
    <a href="/supply_log/edit/{{$supply_log->Slogs_id}}" class="btn btn-primary" role="button" aria-pressed="true">edit</a>
    <a href="/supply_log/update_detail/{{$supply_log->Slogs_id}}" class="btn btn-primary" role="button" aria-pressed="true">update</a>
    <a href="/supply_log/delete/{{$supply_log->Slogs_id}}"  class="btn btn-danger" role="button" aria-pressed="true">delete</a></td>
  </tr>
  @endforeach
  </tbody>
</table>
</div>
@stop