@extends('layouts.default')
@section('content')
<form method="post" action="/person/update/{{$person->P_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">First name</label>
    <input type="text" class="form-control" name="FirstName" placeholder="name">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Last name</label>
    <input type="text" class="form-control" name="LastName" placeholder="last name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
