@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Employer Detail</h2>
  <div class="card">
    <div class="card-body">
      Staff ID: {{$employee->staff_id}}<br>
      Store Work on: {{$employee->store_workON}}<br>
    </div>
  </div>
</div>
@stop
