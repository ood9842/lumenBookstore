@extends('layouts.default')
@section('content')
<form method="post" action="/sell_log/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Sell_log ID</label>
    <input type="text" class="form-control" name="id" placeholder="ID">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Stock ID</label>
    <input type="text" class="form-control" name="SID" placeholder="stock id">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Customer ID</label>
    <input type="text" class="form-control" name="CusID" placeholder="product line id">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Sell date</label>
    <input type="int" class="form-control" name="date" placeholder="yyyy-mm-dd">
  </div>
  <!-- <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Total payment</label>
    <input type="int" class="form-control" name="payment">
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
