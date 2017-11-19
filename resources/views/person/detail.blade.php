@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Person Detail</h2>
  <div class="card">
    <div class="card-body">
      Person ID: {{$person->P_id}}<br>
      First Name: {{$person->first_name}}<br>
      Last Name: {{$person->last_name}}<br>
    </div>
  </div>
</div>
@stop
