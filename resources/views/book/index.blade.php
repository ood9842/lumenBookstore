@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Book List</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/book/form" class="btn btn-success" role="button" aria-pressed="true">Add Book</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <td scope="col">Book ID</td>
        <td scope="col">Book Name</td>
        <td scope="col">Type</td>
        <td scope="col">Edition</td>
        <td scope="col">Publisher by</td>
        <td scope="col">Published year</td>
        <td scope="col">Price</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach ($books as $book)
      <tr>
        <td>{{$book->Book_id}}</td>
        <td>{{$book->Book_name}}</td>
        <td>{{$book->type}}</td>
        <td>{{$book->edition}}</td>
        <td>{{$book->publisher_name}}</td>
        <td>{{$book->published_year}}</td>
        <td>{{$book->price}}</td>
        <td>
        <a href="/book/detail/{{$book->Book_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Deatail</a>
        <a href="/book/edit/{{$book->Book_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/book/delete/{{$book->Book_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@stop
