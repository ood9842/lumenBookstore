@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Product Line details</h2>
  <div class="card">
    <div class="card-body">
      Product Line ID: {{$product_line->Product_line_id}}<br>
      Publisher ID: {{$product_line->publisher_id}}<br>
    </div>
  </div>
</div>
@stop
