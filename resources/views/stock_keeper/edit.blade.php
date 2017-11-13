@extends('layouts.default')
@section('content')
<form method="post" action="/stock_keeper/update/{{$stock_keeper->staff_id}}/{{$stock_keeper->stock_workON}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Stock work place id/label>
    <input type="text" class="form-control" name="stock_workON" placeholder="stock ID" value="{{$stock_keeper->stock_workON}}" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
