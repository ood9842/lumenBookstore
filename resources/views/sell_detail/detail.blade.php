@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Sell Detail<br></h2>
  <div class="card">
    <div class="card-body">
      Sell Log ID: {{$sell_detail->sell_logs_id}}<br>
      Book ID: {{$sell_detail->book_id}}<br>
      Book Name: {{$sell_detail->book_name}}<br>
      Price: {{$sell_detail->price}}<br>
      Amount: {{$sell_detail->amount}}<br>
      Total Line: {{$sell_detail->total_line}}<br>
    </div>
  </div>
</div>
@stop
