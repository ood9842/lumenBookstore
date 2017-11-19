@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Supply Detail<br></h2>
  <div class="card">
    <div class="card-body">
      Slongs ID: {{$supply_detail->slogs_id}}<br>
      Book ID: {{$supply_detail->book_id}}<br>
      Book Name: {{$supply_detail->book_name}}<br>
      Price: {{$supply_detail->price}}<br>
      Amount: {{$supply_detail->amount}}<br>
      Total LineL {{$supply_detail->total_line}}<br>
    </div>
  </div>
</div>
@stop
