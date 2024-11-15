@extends('layouts.mainc')
@section('content_cita')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <p class="h6 text-uppercase text-primary font-weight-bold">Nombre:</p>
            <p class="h5 mb-3 text-justify">{{ $citas->nombre }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Placa:</p>
            <p class="h5 mb-3 text-justify">{{ $citas->placa }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Tipo vehiculo:</p>
            <p class="h5 mb-3 text-justify">{{ $citas->tipo_vehiculo }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Tipo Taller:</p>
            <p class="h5 mb-3 text-justify">{{ $citas->tipo_taller }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Fecha:</p>
            <p class="h5 mb-3 text-justify">{{ $citas->fecha }}</p>
            <p class="h6 text-uppercase text-primary font-weight-bold">Taller:</p>
            <p class="h5 mb-3 text-justify">{{ $citas->taller }}</p>
        </div>
    </div>
</div>
@endsection
