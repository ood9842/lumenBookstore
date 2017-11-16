@extends('layouts.default')
@section('content')
<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <td scope="col">Publisher ID</td>
        <td scope="col">Publisher Name</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($publishers as $publisher)
      <tr>
        <td>{{$publisher->Publisher_id}}</</td>
        <td>{{$publisher->publisher_name}}</td>
        <td>
        <a href="/publisher/detail/{{$publisher->Publisher_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Deatail</a>
        <a href="/publisher/edit/{{$publisher->Publisher_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/publisher/delete/{{$publisher->Publisher_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
<!-- bottom to page create -->

@stop