@extends('layouts.default')
@section('content')
<form method="post" action="/stock/update/{{$stock->Stock_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Number of books</label>
    <input type="int" class="form-control" name="number_of_books" placeholder="number_of_books">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Location</label>
    <input type="text" class="form-control" name="location" placeholder="location">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
