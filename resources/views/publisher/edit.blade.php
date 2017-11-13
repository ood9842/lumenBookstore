@extends('layouts.default')
@section('content')
<form method="post" action="/publisher/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Publisher ID</label>
    <input type="text" class="form-control" name="id" placeholder="ID" value={{$publisher->Publisher_id}}>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Publisher name</label>
    <input type="text" class="form-control" name="Pubname" placeholder="name" value={{$publisher->publisher_name}}>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
