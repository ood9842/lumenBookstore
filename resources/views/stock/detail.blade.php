@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Stock Detail</h2>
  <div class="card">
    <div class="card-body">
      Stock ID: {{$stock->Stock_id}}<br>
      Number OF Books: {{$stock->number_of_books}}<br>
      Location: {{$stock->location}}<br>
    </div>
  </div>
</div>
@stop
