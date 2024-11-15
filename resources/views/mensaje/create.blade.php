@extends('layouts.mainm')
@section('content_mensajes')
<form method="POST" action="{{ route('mensaje.store') }}" role="form"
enctype="multipart/form-data">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 @include('mensaje.form.prt')

</form>
@endsection