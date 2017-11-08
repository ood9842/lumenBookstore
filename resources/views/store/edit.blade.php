@extends('layouts.default')
@section('content')
<form method="post" action="/store/update/{{$store->Store_id}}">
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
</form>
@stop
