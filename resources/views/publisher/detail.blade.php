@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Publisher Detail<br></h2>
  <div class="card">
    <div class="card-body">
      Publisher ID: {{$publisher->Publisher_id}}<br>
      Publisher Name: {{$publisher->publisher_name}}<br>
    </div>
  </div>
</div>
@stop
