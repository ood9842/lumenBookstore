@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Supply detail</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/supply_detail/form" class="btn btn-success" role="button" aria-pressed="true">Add Supply detail</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
  <table class="table table-bordered">
    <div class="w3-container w3-white" >
    <tr>
      <td scope="col">Supply Logs ID</td>
      <td scope="col">Book ID</td>
      <td scope="col">Book Name</td>
      <td scope="col">Price</td>
      <td scope="col">Amount</td>
      <td scope="col">Total Line</td>
      <td scope="col">Operations</td>
    </tr>
    <tbody id="myTable">
    @foreach ($supply_details as $supply_detail)
    <tr>
      <td><a href="/supply_log/detail/{{$supply_detail->slogs_id}}">{{$supply_detail->slogs_id}}</a></td>
      <td><a href="/book/detail/{{$supply_detail->book_id}}">{{$supply_detail->book_id}}</a></td>
      <td>{{$supply_detail->book_name}}</td>
      <td>{{$supply_detail->price}}</td>
      <td>{{$supply_detail->amount}}</td>
      <td>{{$supply_detail->total_line}}</td>
      <td>
      <a href="/supply_detail/detail/{{$supply_detail->slogs_id}}/{{$supply_detail->book_id}}" class="btn btn-secondary" role="button" aria-pressed="true">detail</a>
      <a href="/supply_detail/edit/{{$supply_detail->slogs_id}}/{{$supply_detail->book_id}}" class="btn btn-primary"  role="button" aria-pressed="true">edit</a>
      <a href="/supply_detail/delete/{{$supply_detail->slogs_id}}/{{$supply_detail->book_id}}"class="btn btn-danger" role="button" aria-pressed="true">delete</a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop
