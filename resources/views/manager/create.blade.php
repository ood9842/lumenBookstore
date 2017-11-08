@extends('layouts.default')
@section('content')
<form method="post" action="/manager/create">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Manager ID</label>
    <input type="text" class="form-control" name="manager_id" placeholder="manager id">
  </div>
    <div class="form-group">
      <label class="col-form-label" for="formGroupExampleInput">Manage on store ID</label>
      <input type="text" class="form-control" name="store_on" placeholder="store id">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
