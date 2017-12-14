@extends('layouts.default')
@section('header')
<div class="container-fluid">
  <div class="row">
    <h1>Product Line</h1>
  </div>
  <div class="form-inline row">
    <label class="sr-only" for="inlineFormInput">Search</label>
    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="myInput" type="text" placeholder="Search..">
    <a href="/product_line/form" class="btn btn-success" role="button" aria-pressed="true">Add Product Line</a>
  </div>
</div>
@stop
@section('content')
<div class = "table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <td scope="col">Product Line ID</td>
        <td scope="col">Publisher ID</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach ($product_lines as $product_line)
      <tr>
        <td>{{$product_line->Product_line_id}}</td>
        <td><a href="/publisher/detail/{{$product_line->publisher_id}}">{{$product_line->publisher_id}}</a></td>
        <td>
        <a href="/product_line/detail/{{$product_line->Product_line_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Detail</a>
        <a href="/product_line/edit/{{$product_line->Product_line_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/product_line/delete/{{$product_line->Product_line_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@stop
