@extends('layouts.default')
@section('content')
  <center><table class="sortable" border="1" id="myTable" style="width:97%;">
    <div class="w3-container w3-white" >
    <tr>
      <th>Person ID</th>
      <th>First name</th>
      <th>Last name</th>
    </tr>
    @foreach ($persons as $person)
    <tr>
      <th>{{$person->P_id}}</th>
      <th>{{$person->first_name}}</th>
      <th>{{$person->last_name}}</th>
      <th><a href="/person/detail/{{$person->P_id}}">detail</a></th>
      <th><a href="/person/edit/{{$person->P_id}}">edit</a></th>
      <th><a href="/person/delete/{{$person->P_id}}">delete</a></th>
    </tr>
    @endforeach
  </table></center>
  <!-- bottom to page create -->
  <center><button class="w3-button w3-white"><a href="/person/form">add book</a></button></center>
@stop
