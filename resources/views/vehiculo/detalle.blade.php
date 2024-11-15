@extends('layouts.main')
@section('content_vehiculo')

<div class="panel-body">
    <div class="row">
        <div class="col-md-6">
            <p class="h6 text-uppercase text-primary font-weight-bold">Placa:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->placa }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Marca:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->marca }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Color:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->color }}</p>
        </div>
        <div class="col-md-6">
            <p class="h6 text-uppercase text-primary font-weight-bold">Modelo:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->modelo }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">CC:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->cc }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Año:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->año }}</p>
        </div>
        <div class="col-md-6">
            <p class="h6 text-uppercase text-primary font-weight-bold">Kilometraje:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->kilometraje }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Tipo de Combustible:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->tipo_combustible }}</p>
        </div>
        <div class="col-md-6">
            <p class="h6 text-uppercase text-primary font-weight-bold">Último Mantenimiento:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->ultimo_mantenimiento }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Tipo de Vehículo:</p>
            <p class="h5 mb-3 text-justify">{{ $vehiculos->tipo_vehiculo }}</p>
        </div>
    </div>
</div>
@endsection
