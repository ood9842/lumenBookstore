@extends('layouts.default')
@section('content')


  Stock details<br>
  {{$stock->Stock_id}}<br>
  {{$stock->number_of_books}}<br>
  {{$stock->location}}<br>


@stop
