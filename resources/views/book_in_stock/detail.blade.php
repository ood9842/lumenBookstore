@extends('layouts.default')
@section('content')


  book_in_stock details<br>
  {{$book_in_stock->stock_id}}<br>
  {{$book_in_stock->book_id}}<br>
  {{$book_in_stock->amount}}<br>


@stop
