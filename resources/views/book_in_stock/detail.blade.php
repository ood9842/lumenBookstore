@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Book In Stock Detail</h2>
  <div class="card">
    <div class="card-body">
      Stock ID: {{$book_in_stock->stock_id}}<br>
      Book ID: {{$book_in_stock->book_id}}<br>
      Amount: {{$book_in_stock->amount}}<br>
    </div>
  </div>
</div>
@stop
