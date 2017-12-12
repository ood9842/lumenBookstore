@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Stock Keeper</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/stock_keeper/form" class="btn btn-success" role="button" aria-pressed="true">Add Stock Keeper</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
  <table class="table table-bordered">
    <div class="w3-container w3-white" >
    <tr>
      <td scope="col">Staff ID</td>
      <td scope="col">Work on stock</td>
      <td scope="col">Operations</td>
    </tr>
    <tobody id="myTable">
    @foreach ($stock_keepers as $stock_keeper)
    <tr>
      <td><a href="/staff/detail/{{$stock_keeper->staff_id}}">{{$stock_keeper->staff_id}}</a></td>
      <td><a href="/stock/detail/{{$stock_keeper->stock_workON}}">{{$stock_keeper->stock_workON}}</a></td>
      <td>
      <a href="/stock_keeper/detail/{{$stock_keeper->staff_id}}" class="btn btn-secondary" role="button" aria-pressed="true">detail</a>
      <a href="/stock_keeper/edit/{{$stock_keeper->staff_id}}" class="btn btn-primary" role="button" aria-pressed="true">edit</a>
      <a href="/stock_keeper/delete/{{$stock_keeper->staff_id}}" class="btn btn-danger" role="button" aria-pressed="true">delete</a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop
