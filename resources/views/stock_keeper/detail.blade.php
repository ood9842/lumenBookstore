@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Stock Keeper Detail</h2>
  <div class="card">
    <div class="card-body">
      Staff ID: {{$stock_keeper->staff_id}}<br>
      Stock Work on: {{$stock_keeper->stock_workON}}<br>
    </div>
  </div>
</div>
@stop
