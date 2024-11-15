@extends('layouts.mainm')

@section('content_mantenimiento')
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
            @if ( empty ( $mantenimiento->id) )    
            <form method="POST" action="{{ route('mantenimiento.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="placa" class="negrita">Placa:</label>
                        <div>
                            <input class="form-control" placeholder="ABC123" required="required" name="placa"
                                type="text" id="placa">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kilometraje" class="negrita">Kilometraje:</label>
                        <div>
                            <input class="form-control" placeholder="10000" required="required" name="kilometraje" type="text"
                                id="kilometraje" value="{{ !empty($mantenimiento->kilometraje) ? $mantenimiento->kilometraje : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ultimo_mantenimiento" class="negrita">Último Mantenimiento:</label>
                        <div>
                            <input class="form-control" placeholder="2022-03-31" required="required" name="ultimo_mantenimiento" type="text"
                                id="ultimo_mantenimiento" value="{{ !empty($mantenimiento->ultimo_mantenimiento) ? $mantenimiento->ultimo_mantenimiento : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_vehiculos" class="negrita">Tipo de Vehículo:</label>
                        <div>
                            <input class="form-control" placeholder="Sedán" required="required" name="tipo_vehiculo" type="text"
                                id="tipo_vehiculo" value="{{ !empty($vehiculos->tipo_vehiculo) ? $vehiculos->tipo_vehiculo : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_taller" class="negrita">Tipo de Taller:</label>
                        <div>
                            <input class="form-control" placeholder="Tipo de taller" required="required" name="tipo_taller" type="text"
                                id="tipo_taller">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('vehiculo.index') }}" class="btn btn-warning">Cancelar</a>
                    <br><br>
                </form>
            @else
            <form method="POST" action="{{ route('mantenimiento.update', $mantenimiento->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="placa" class="negrita">Placa:</label>
                        <div>
                            <input class="form-control" placeholder="ABC123" required="required" name="placa"
                                type="text" id="placa" value="{{ $mantenimiento->placa }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kilometraje" class="negrita">Kilometraje:</label>
                        <div>
                            <input class="form-control" placeholder="10000" required="required" name="kilometraje" type="text"
                                id="kilometraje" value="{{ !empty($mantenimiento->kilometraje) ? $mantenimiento->kilometraje : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ultimo_mantenimiento" class="negrita">Último Mantenimiento:</label>
                        <div>
                            <input class="form-control" placeholder="2022-03-31" required="required" name="ultimo_mantenimiento" type="text"
                                id="ultimo_mantenimiento" value="{{ !empty($mantenimiento->ultimo_mantenimiento) ? $mantenimiento->ultimo_mantenimiento : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_vehiculos" class="negrita">Tipo de Vehículo:</label>
                        <div>
                            <input class="form-control" placeholder="Sedán" required="required" name="tipo_vehiculo" type="text"
                                id="tipo_vehiculo" value="{{ !empty($mantenimiento->tipo_vehiculo) ? $mantenimiento->tipo_vehiculo : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_taller" class="negrita">Tipo de Taller:</label>
                        <div>
                            <input class="form-control" placeholder="Tipo de taller" required="required" name="tipo_taller" type="text"
                            id="tipo_taller" value="{{ !empty($mantenimiento->tipo_taller) ? $mantenimiento->tipo_taller : '' }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('mantenimiento.index') }}" class="btn btn-warning">Cancelar</a>
                    <br><br>
                </form>
            @endif
            </div>
        </section>
    </div>
</div>
@endsection