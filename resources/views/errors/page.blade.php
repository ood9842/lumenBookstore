@extends('layouts.default')
@section('content')
<div><div class="alert alert-danger">
<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
</div></div>
<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
@endsection