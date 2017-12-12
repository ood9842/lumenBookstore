@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Manager Detail</h2>
  <div class="card">
    <div class="card-body">
      Staff ID: {{$manager->staff_id}}<br>
      Store Manage on: {{$manager->store_manageON}}<br>
    </div>
  </div>
</div>
@stop