@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Person Detail</h2>
  <div class="card">
    <div class="card-body">
      Person ID: {{$staff->person_id}}<br>
      Staff ID: {{$staff->S_id}}<br>
      Salary: {{$staff->salary}}<br>
      Work on: {{$staff->work_on}}
    </div>
  </div>
</div>
@stop
