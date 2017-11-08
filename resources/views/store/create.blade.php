@extends('layouts.default')
@section('content')
<form method="post" action="/store/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Store ID</label>
    <input type="text" class="form-control" name="Store_id" placeholder="Store_id">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Address</label>
    <input type="text" class="form-control" name="address" placeholder="address">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Stock ID</label>
    <input type="text" class="form-control" name="stock_id" placeholder="stock_id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
