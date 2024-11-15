@extends('layouts.maint')
@section('content_taller')
<div class="panel-body">
    <div class="clearfix">
        <p class="h6">Nombre Taller:</p>
        <p class="h4 mb-3">{{ $talleres->nombre_taller }}</p>
        <p class="h6">Runt:</p>
        <p class="h4 mb-3">{{ $talleres->runt }}</p>
        <p class="h6">Camara Comercio:</p>
        <p class="h4 mb-3">{{ $talleres->camara_comercio }}</p>
        <p class="h6">Direccion:</p>
        <p class="h4 mb-3">{{ $talleres->direccion }}</p>
        <p class="h6">Tipo Taller:</p>
        <p class="h4 mb-3">{{ $talleres->tipo_taller }}</p>
    </div>
</div>
@endsection
