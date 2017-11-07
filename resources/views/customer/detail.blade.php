@extends('layouts.default')
@section('content')


  Customer details<br>
  {{$customer->C_id}}<br>
  {{$customer->person_id}}<br>
  {{$customer->member_id}}<br>
  {{$customer->points}}<br>
  {{$customer->expired_date}}<br>


@stop
