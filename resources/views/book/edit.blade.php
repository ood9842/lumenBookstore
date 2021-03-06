@extends('layouts.default')
@section('content')
<form method="post" action="/book/update/{{$book->Book_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Book name</label>
    <input type="text" class="form-control" name="Bname" placeholder="name" value={{$book->Book_name}} >
    </div>
    <div class="form-group">
      <label class="col-form-label" for="formGroupExampleInput">Book type</label>
      <input type="text" class="form-control" name="type" placeholder="type" value={{$book->type}}>
    </div>
    <div class="form-group">
      <label class="col-form-label" for="formGroupExampleInput">Edition</label>
      <input type="text" class="form-control" name="edition" placeholder="edition" value={{$book->edition}}>
    </div>
    <div class="form-group">
      <label class="col-form-label" for="formGroupExampleInput">Publisher by</label>
      <input type="text" class="form-control" name="Pname" placeholder="name" value={{$book->publisher_name}}>
    </div>
    <div class="form-group">
      <label class="col-form-label" for="formGroupExampleInput">Published year</label>
      <input type="text" class="form-control" name="Pyear" placeholder="year" value={{$book->published_year}}>
      </div>
    <div class="form-group">
      <label class="col-form-label" for="formGroupExampleInput">Price</label>
      <input type="text" class="form-control" name="price" value={{$book->price}}>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop
