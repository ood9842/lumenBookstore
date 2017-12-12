@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Store Detail</h2>
  <div class="card">
    <div class="card-body">
      Store ID: {{$store->Store_id}}<br>
      Address: {{$store->address}}<br>
      Stock ID: {{$store->stock_id}}<br>
    </div>
  </div>
</div>
@stop
