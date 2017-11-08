@extends('layouts.default')
@section('content')
<form method="post" action="/employee/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Staff ID</label>
    <input type="text" class="form-control" name="id" placeholder="ID">
  </div>
    <div class="form-group">
      <label class="col-form-label" for="formGroupExampleInput">Work Place</label>
      <input type="text" class="form-control" name="work_on" placeholder="work place">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
