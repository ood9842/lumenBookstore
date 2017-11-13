@extends('layouts.default')
@section('content')
<form method="post" action="/sell_detail/update/{{$sell_detail->sell_logs_id}}/{{$sell_detail->book_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Book ID</label>
    <input type="text" class="form-control" name="book_id" placeholder="BOOK ID" value="{{$sell_detail->book_id}}" required>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">AMOUNT</label>
    <input type="int" class="form-control" name="amount" placeholder="AMOUNT" value="{{$sell_detail->amount}}" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
