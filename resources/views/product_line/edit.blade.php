@extends('layouts.default')
@section('content')
<form method="post" action="/product_line/update/{{$product_line->Product_line_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Publisher ID</label>
    <input type="text" class="form-control" name="publisher_id" placeholder="publisher_id" value={{$product_line->publisher_id}}>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
