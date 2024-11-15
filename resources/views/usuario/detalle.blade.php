@extends('layouts.mainu')
@section('content_usuario')
<div class="panel-body">
    <div class="clearfix">
        <p class="h6">Nombre De Usuario:</p>
        <p class="h4 mb-3">{{ $user->name }}</p>
        <p class="h6">Email:</p>
        <p class="h4 mb-3">{{ $user->email }}</p>
        <p class="h6">Fecha Nacimiento:</p>
        <p class="h4 mb-3">{{ $user->fecha_nacimiento }}</p>
        <p class="h6">Celular:</p>
        <p class="h4 mb-3">{{ $user->celular }}</p>
        <p class="h6">Contraseña:</p>
        <p class="h4 mb-3">{{ $user->password }}</p>
    </div>
</div>
@endsection
