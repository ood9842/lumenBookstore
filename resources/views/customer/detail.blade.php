@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Customer Detail</h2>
  <div class="card">
    <div class="card-body">
      ID: {{$customer->C_id}}<br>
      Person ID: {{$customer->person_id}}<br>
      Member ID: {{$customer->member_id}}<br>
      Points: {{$customer->points}}<br>
      Expired Date: {{$customer->expired_date}}<br>
    </div>
  </div>
</div>
@stop
