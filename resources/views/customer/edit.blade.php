@extends('layouts.default')
@section('content')
<form method="post" action="/customer/update/{{$customer->C_id}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Person ID</label>
    <input type="text" class="form-control" name="person_id" placeholder="Person ID" value={{$customer->person_id}}>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Member ID</label>
    <input type="text" class="form-control" name="member_id" placeholder="Member ID" value={{$customer->member_id}}>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Points</label>
    <input type="int" class="form-control" name="points" placeholder="Points" value={{$customer->points}}>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Expired date</label>
    <input type="text" class="form-control" name="expired_date" placeholder="Expired date" value={{$customer->expired_date}}>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@stop
