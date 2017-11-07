@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Publisher ID</th>
      <th>Publisher name</th>
    </tr>
    @foreach ($publishers as $publisher)
    <tr>
      <th>{{$publisher->Publisher_id}}</th>
      <th>{{$publisher->publisher_name}}</th>
      <th><a href="/publisher/detail/{{$publisher->Publisher_id}}">detail</a></th>
      <th><a href="/publisher/edit/{{$publisher->Publisher_id}}">edit</a></th>
      <th><a href="/publisher/delete/{{$publisher->Publisher_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/publisher/form">add publisher</a></button></center>
@stop
