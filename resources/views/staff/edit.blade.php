@extends('layouts.default')
@section('content')
<form method="post" action="/staff/update/{{$staff->S_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Salary</label>
    <input type="text" class="form-control" name="salary" value="{{$staff->salary}}" required>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Worked on date</label>
    <input type="text" class="form-control" name="Wdate" placeholder="yyyy-mm-dd" value="{{$staff->work_on}}" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
