@extends('layouts.default')
@section('content')
<form method="post" action="/book_in_stock/update/{{$book_in_stock->stock_id}}/{{$book_in_stock->book_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Amount</label>
    <input type="int" class="form-control" name="amount" placeholder="AMOUNT"value={{$book_in_stock->amount}}>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
