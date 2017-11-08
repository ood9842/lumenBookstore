@extends('layouts.default')
@section('content')


  Book details<br>
  {{$book->Book_id}}<br>
  {{$book->Book_name}}<br>
  {{$book->type}}<br>
  {{$book->edition}}<br>
  {{$book->publisher_name}}<br>
  {{$book->published_year}}<br>
  {{$book->price}}<br>

@stop
