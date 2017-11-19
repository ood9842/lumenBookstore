@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Book Deatil</h2>
  <div class="card">
    <div class="card-body">
      Book ID:{{$book->Book_id}}<br>
      Name:{{$book->Book_name}}<br>
      Type:{{$book->type}}<br>
      Edition:{{$book->edition}}<br>
      Publisher:{{$book->publisher_name}}<br>
      Published Year:{{$book->published_year}}<br>
      Price:{{$book->price}}<br>
    </div>
  </div>
</div>
@stop
