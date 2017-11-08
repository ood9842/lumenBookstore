@extends('layouts.default')
@section('content')
<form method="post" action="/stock/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Stock ID</label>
    <input type="text" class="form-control" name="Stock_id" placeholder="Stock_id">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Number of books</label>
    <input type="int" class="form-control" name="number_of_books" placeholder="number_of_books">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Location</label>
    <input type="text" class="form-control" name="location" placeholder="location">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
