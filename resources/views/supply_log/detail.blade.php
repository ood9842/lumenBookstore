@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Supply Log  Detail</h2>
  <div class="card">
    <div class="card-body">
      Slongs ID: {{$supply_log->Slogs_id}}<br>
      Stock ID: {{$supply_log->stock_id}}<br>
      Product ine ID: {{$supply_log->product_line_id}}<br>
      Date: {{$supply_log->supply_date}}<br>
      Total Payment: {{$supply_log->total_payment}}<br>
      Sent OR Back: {{$supply_log->sentOrback}}<br>
    </div>
  </div>
</div>

  

@stop
