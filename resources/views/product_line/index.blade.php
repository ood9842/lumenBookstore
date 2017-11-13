@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Product Line ID</th>
      <th>Publisher ID</th>
    </tr>
    @foreach ($product_lines as $product_line)
    <tr>
      <th>{{$product_line->Product_line_id}}</th>
      <th><a href="/publisher/detail/{{$product_line->publisher_id}}">{{$product_line->publisher_id}}</a></th>
      <th><a href="/product_line/detail/{{$product_line->Product_line_id}}">detail</a></th>
      <th><a href="/product_line/edit/{{$product_line->Product_line_id}}">edit</a></th>
      <th><a href="/product_line/delete/{{$product_line->Product_line_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/product_line/form">add store</a></button></center>
@stop
