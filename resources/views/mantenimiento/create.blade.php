@extends('layouts.mainm')
@section('content_mantenimiento')


<form method="POST" action="{{ route('mantenimiento.store') }}" role="form"
enctype="multipart/form-data">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 @include('mantenimiento.form.prt')

</form>
@endsection
