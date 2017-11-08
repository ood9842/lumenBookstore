@extends('layouts.default')
@section('content')
<form method="post" action="/book_in_stock/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">StockID</label>
    <input type="text" class="form-control" name="stock_id" placeholder="STOCK ID">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Book ID</label>
    <input type="text" class="form-control" name="book_id" placeholder="BOOK ID">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Amount</label>
    <input type="int" class="form-control" name="amount" placeholder="AMOUNT">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
