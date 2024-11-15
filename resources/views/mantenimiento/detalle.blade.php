@extends('layouts.mainm')
@section('content_mantenimiento')
<div class="panel-body">
    <div class="clearfix">
        <p class="h6">Placa:</p>
        <p class="h4 mb-3">{{ $mantenimento->placa }}</p>
        <p class="h6">kilometraje:</p>
        <p class="h4 mb-3">{{ $mantenimento->kilometraje }}</p>
        <p class="h6">Ultimo mantenimiento:</p>
        <p class="h4 mb-3">{{ $mantenimiento->ultimo_mantenimiento }}</p>
        <p class="h6">Tipo vehiculo:</p>
        <p class="h4 mb-3">{{ $mantenimiento->tipo_vehiculo }}</p>
        <p class="h6">Tipo Taller:</p>
        <p class="h4 mb-3">{{ $mantenimiento->tipo_taller }}</p>
    </div>
</div>
@endsection