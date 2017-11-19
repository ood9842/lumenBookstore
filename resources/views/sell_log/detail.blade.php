@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Sell Log Detail</h2>
  <div class="card">
    <div class="card-body">
      Sell Log ID: {{$sell_log->Sell_logs_id}}<br>
      Stock ID: {{$sell_log->stock_id}}<br>
      Customer ID: {{$sell_log->customer_id}}<br>
      Sell Date: {{$sell_log->sell_date}}<br>
      Total Payment: {{$sell_log->total_payment}}<br>
    </div>
  </div>
</div>
@stop
