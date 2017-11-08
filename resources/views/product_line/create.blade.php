@extends('layouts.default')
@section('content')
<form method="post" action="/product_line/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Product Line ID</label>
    <input type="text" class="form-control" name="Product_line_id" placeholder="Product_line_id">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Publisher ID</label>
    <input type="text" class="form-control" name="publisher_id" placeholder="publisher_id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
