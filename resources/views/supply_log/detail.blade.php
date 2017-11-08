@extends('layouts.default')
@section('content')


  Supply log details<br>
  {{$supply_log->Slogs_id}}<br>
  {{$supply_log->stock_id}}<br>
  {{$supply_log->product_line_id}}<br>
  {{$supply_log->supply_date}}<br>
  {{$supply_log->total_payment}}<br>
  {{$supply_log->sentOrback}}<br>

@stop
