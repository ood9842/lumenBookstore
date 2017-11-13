@extends('layouts.default')
@section('content')
<form method="post" action="/sell_log/update/{{$sell_log->Sell_logs_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Stock ID</label>
    <input type="text" class="form-control" name="SID" placeholder="stock id" value="{{$sell_log->stock_id}}" required>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Customer ID</label>
    <input type="text" class="form-control" name="CusID" placeholder="product line id" value="{{$sell_log->customer_id}}" required>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Sell date</label>
    <input type="int" class="form-control" name="date" placeholder="yyyy-mm-dd" value="{{$sell_log->sell_date}}" required>
  </div>
  <!-- <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Total payment</label>
    <input type="int" class="form-control" name="payment">
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
