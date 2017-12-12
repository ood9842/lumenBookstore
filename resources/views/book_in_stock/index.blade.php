@extends('layouts.default')
 @section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Book in Stock</h1>
  </div>
  <div class="row">
    <a href="/book_in_stock/form" class="btn btn-success" role="button" aria-pressed="true">Add Book in stock</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <td scope="col">Stock ID</td>
        <td scope="col">Book ID</td>
        <td scope="col">Amount</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($book_in_stocks as $book_in_stock)
      <tr>
        <td><a href="/stock/detail/{{$book_in_stock->stock_id}}">{{$book_in_stock->stock_id}}</a></td>
        <td><a href="/book/detail/{{$book_in_stock->book_id}}">{{$book_in_stock->book_id}}</a></td>
        <td>{{$book_in_stock->amount}}</td>
        <td>
        <a href="/book_in_stock/detail/{{$book_in_stock->stock_id}}/{{$book_in_stock->book_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Deatail</a>
        <a href="/book_in_stock/edit/{{$book_in_stock->stock_id}}/{{$book_in_stock->book_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/book_in_stock/delete/{{$book_in_stock->stock_id}}/{{$book_in_stock->book_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@stop
