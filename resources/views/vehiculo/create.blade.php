@extends('layouts.main')
@section('content_vehiculo')

@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
</ul>
</div>
@endif

<form method="POST" action="{{ route('vehiculo.store') }}" role="form" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@include('vehiculo.form.prt')

</form>
@endsection