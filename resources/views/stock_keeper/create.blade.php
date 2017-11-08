@extends('layouts.default')
@section('content')
<form method="post" action="/stock_keeper/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Stock keeper ID</label>
    <input type="text" class="form-control" name="id" placeholder="staff id">
  </div>
    <div class="form-group">
      <label class="col-form-label" for="formGroupExampleInput">Work on stock ID</label>
      <input type="text" class="form-control" name="stock_on" placeholder="stock id">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
