@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Book ID</th>
      <th>Book name</th>
      <th>type</th>
      <th>edition</th>
      <th>publisher by</th>
      <th>published year</th>
      <th>price</th>
    </tr>
    @foreach ($books as $book)
    <tr>
      <th>{{$book->Book_id}}</th>
      <th>{{$book->Book_name}}</th>
      <th>{{$book->type}}</th>
      <th>{{$book->edition}}</th>
      <th>{{$book->publisher_name}}</th>
      <th>{{$book->published_year}}</th>
      <th>{{$book->price}}</th>
      <th><a href="/book/detail/{{$book->Book_id}}">detail</a></th>
      <th><a href="/book/edit/{{$book->Book_id}}">edit</a></th>
      <th><a href="/book/delete/{{$book->Book_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button style="position:absolute; right:25px" class="w3-button w3-white"><a href="/book/form">add book</a></button></center>
@stop
