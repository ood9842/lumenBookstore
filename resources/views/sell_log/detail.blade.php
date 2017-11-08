@extends('layouts.default')
@section('content')


   Sell log details<br>
  {{$sell_log->Sell_logs_id}}<br>
  {{$sell_log->stock_id}}<br>
  {{$sell_log->customer_id}}<br>
  {{$sell_log->sell_date}}<br>
  {{$sell_log->total_payment}}<br>

@stop
