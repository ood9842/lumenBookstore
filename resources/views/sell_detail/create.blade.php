@extends('layouts.default')
@section('content')
<form method="post" action="/sell_detail/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Sell LOGS ID</label>
    <input type="text" class="form-control" name="sell_logs_id" placeholder="SELL LOGS ID">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Book ID</label>
    <input type="text" class="form-control" name="book_id" placeholder="BOOK ID">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">AMOUNT</label>
    <input type="int" class="form-control" name="amount" placeholder="AMOUNT">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
