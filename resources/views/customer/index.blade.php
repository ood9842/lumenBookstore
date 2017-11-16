@extends('layouts.default')
@section('content')
<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <td scope="col">Customer ID</td>
        <td scope="col">Person ID</td>
        <td scope="col">Member ID</td>
        <td scope="col">Points</td>
        <td scope="col">Expired date</td>
        <td scope="col">Operations</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($customers as $customer)
      <tr>
      <td>{{$customer->C_id}}</td>
      <td><a href="/person/detail/{{$customer->person_id}}">{{$customer->person_id}}</a></td>
      <td><a href="/store/detail/{{$customer->member_id}}">{{$customer->member_id}}</a></td>
      <td>{{$customer->points}}</td>
      <td>{{$customer->expired_date}}</td>
      <td>
        <a href="/customer/detail/{{$customer->C_id}}" class="btn btn-secondary" role="button" aria-pressed="true">Deatail</a>
        <a href="/customer/detail/{{$customer->C_id}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
        <a href="/customer/detail/{{$customer->C_id}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
<!-- bottom to page create -->

@stop
