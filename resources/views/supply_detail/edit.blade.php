@extends('layouts.default')
@section('content')
<form method="post" action="/supply_detail/update/{{$supply_detail->slogs_id}}/{{$supply_detail->book_id}}">
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
</form>
@stop
