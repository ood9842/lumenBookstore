@extends('layouts.default')
@section('content')


  Person details<br>
  {{$staff->person_id}}<br>
  {{$staff->S_id}}<br>
  {{$staff->salary}}<br>
  {{$staff->work_on}}

@stop
