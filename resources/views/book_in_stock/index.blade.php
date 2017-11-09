@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Stock ID</th>
      <th>Book ID</th>
      <th>Amount</th>
    </tr>
    @foreach ($book_in_stocks as $book_in_stock)
    <tr>
      <th><a href="/stock/detail/{{$book_in_stock->stock_id}}">{{$book_in_stock->stock_id}}</a></th>
      <th><a href="/book/detail/{{$book_in_stock->book_id}}">{{$book_in_stock->book_id}}</a></th>
      <th>{{$book_in_stock->amount}}</th>
      <th><a href="/book_in_stock/detail/{{$book_in_stock->stock_id}}/{{$book_in_stock->book_id}}">detail</a></th>
      <th><a href="/book_in_stock/edit/{{$book_in_stock->stock_id}}/{{$book_in_stock->book_id}}">edit</a></th>
      <th><a href="/book_in_stock/delete/{{$book_in_stock->stock_id}}/{{$book_in_stock->book_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/book_in_stock/form">add employee</a></button></center>
@stop
