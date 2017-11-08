@extends('layouts.default')
@section('content')
<form method="post" action="/employee/update/{{$employee->staff_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Work Place</label>
    <input type="text" class="form-control" name="store_workON" placeholder="work place">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
