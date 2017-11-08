@extends('layouts.default')
@section('content')
<form method="post" action="/manager/update/{{$manager->staff_id}}/{{$manager->store_manageON}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Work Place</label>
    <input type="text" class="form-control" name="store_manageON" placeholder="store ID">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
