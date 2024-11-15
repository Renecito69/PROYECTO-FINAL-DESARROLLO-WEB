@extends('layouts.mainc')
@section('content_cota')

@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
</ul>
</div>
@endif

<form method="POST" action="{{ route('cita.update', $citas->id) }}">
role="form" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@include('cita.form.prt')

</form>
@endsection