@extends('layouts.default')
@section('content')
<form method="post" action="/store/update/{{$store->Store_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Address</label>
    <input type="text" class="form-control" name="address" placeholder="address" value="{{$store->address}}" required>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Stock ID</label>
    <input type="text" class="form-control" name="stock_id" placeholder="stock_id" value="{{$store->stock_id}}" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
