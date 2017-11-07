@extends('layouts.default')
@section('content')
<form method="post" action="/staff/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Personal ID</label>
    <input type="text" class="form-control" name="PID" placeholder="person ID">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">First name ID</label>
    <input type="text" class="form-control" name="FirstName" placeholder="name">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Last name</label>
    <input type="text" class="form-control" name="LastName" placeholder="last name">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Staff ID</label>
    <input type="text" class="form-control" name="id" placeholder="ID">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Salary</label>
    <input type="text" class="form-control" name="salary">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Worked on date</label>
    <input type="text" class="form-control" name="Wdate" placeholder="dd/mm/yyyy">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
