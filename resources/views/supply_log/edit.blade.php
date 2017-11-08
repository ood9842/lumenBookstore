@extends('layouts.default')
@section('content')
<form method="post" action="/supply_log/update/{{$supply_log->Slogs_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Stock ID [old stock id : {{$supply_log->stock_id}}]</label>
    <input type="text" class="form-control" name="SID" placeholder="stock id">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Product line ID [old product line id : {{$supply_log->product_line_id}}]</label>
    <input type="text" class="form-control" name="ProID" placeholder="product line id">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Supply date</label>
    <input type="int" class="form-control" name="date" placeholder="yyyy-mm-dd">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Total payment</label>
    <input type="int" class="form-control" name="payment">
  </div>
  <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="srb" value="sent">
    Send
  </label>
  </div>
  <div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="srb" value="sentback">
    Back
  </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
