@extends('layouts.main')

@section('content_vehiculo')
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
            @if ( empty ( $vehiculos->id) )    
            <form method="POST" action="{{ route('vehiculo.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="placa" class="negrita">Placa:</label>
                        <div>
                            <input class="form-control" placeholder="ABC123" required="required" name="placa"
                                type="text" id="placa">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="negrita">Marca:</label>
                        <div>
                            <input class="form-control" placeholder="Toyota" required="required" name="marca" type="text"
                                id="marca">
                        </div>
                    </div> 
                    <div class="mb-3">
                        <label for="color" class="negrita">Color:</label>
                        <div>
                            <input class="form-control" placeholder="Rojo" required="required" name="color" type="text"
                                id="color">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="negrita">Modelo:</label>
                        <div>
                            <input class="form-control" placeholder="2022" required="required" name="modelo" type="int"
                                id="modelo">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cc" class="negrita">CC:</label>
                        <div>
                            <input class="form-control" placeholder="1500" required="required" name="cc" type="int"
                                id="cc" value="{{ !empty($vehiculos->cc) ? $vehiculos->cc : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="año" class="negrita">Año:</label>
                        <div>
                            <input class="form-control" placeholder="2020" required="required" name="año" type="int"
                                id="año" value="{{ !empty($vehiculos->año) ? $vehiculos->año : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kilometraje" class="negrita">Kilometraje:</label>
                        <div>
                            <input class="form-control" placeholder="10000" required="required" name="kilometraje" type="int"
                                id="kilometraje" value="{{ !empty($vehiculos->kilometraje) ? $vehiculos->kilometraje : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_combustible" class="negrita">Tipo de Combustible:</label>
                        <div>
                            <input class="form-control" placeholder="Gasolina" required="required" name="tipo_combustible" type="text"
                                id="tipo_combustible" value="{{ !empty($vehiculos->tipo_combustible) ? $vehiculos->tipo_combustible : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ultimo_mantenimiento" class="negrita">Último Mantenimiento:</label>
                        <div>
                            <input class="form-control" placeholder="2022-03-31" required="required" name="ultimo_mantenimiento" type="date"
                                id="ultimo_mantenimiento" value="{{ !empty($vehiculos->ultimo_mantenimiento) ? $vehiculos->ultimo_mantenimiento : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_vehiculo" class="negrita">Tipo de Vehiculo:</label>
                        <select class="form-control" required="required" name="tipo_vehiculo" id="tipo_vehiculo">
                            <option value="" disabled selected>Seleccione el Tipo de Vehiculo</option>
                            <option value="moto">Moto</option>
                            <option value="frenos">Carro</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('cita.index') }}" class="btn btn-warning">Cancelar</a>
                    <br><br>
                </form>
            @else
            <form method="POST" action="{{ route('vehiculo.update', $vehiculos->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="placa" class="negrita">Placa:</label>
                        <div>
                            <input class="form-control" placeholder="ABC123" required="required" name="placa"
                                type="text" id="placa" value="{{ $vehiculos->placa }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="negrita">Marca:</label>
                        <div>
                            <input class="form-control" placeholder="Toyota" required="required" name="marca" type="text"
                                id="marca" value="{{ $vehiculos->marca }}">
                        </div>
                    </div> 
                    <div class="mb-3">
                        <label for="color" class="negrita">Color:</label>
                        <div>
                            <input class="form-control" placeholder="Rojo" required="required" name="color" type="text"
                                id="color" value="{{ !empty($vehiculos->color) ? $vehiculos->color : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="negrita">Modelo:</label>
                        <div>
                            <input class="form-control" placeholder="2022" required="required" name="modelo" type="int"
                                id="modelo" value="{{ !empty($vehiculos->modelo) ? $vehiculos->modelo : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cc" class="negrita">CC:</label>
                        <div>
                            <input class="form-control" placeholder="1500" required="required" name="cc" type="int"
                                id="cc" value="{{ !empty($vehiculos->cc) ? $vehiculos->cc : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="año" class="negrita">Año:</label>
                        <div>
                            <input class="form-control" placeholder="2020" required="required" name="año" type="int"
                                id="año" value="{{ !empty($vehiculos->año) ? $vehiculos->año : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kilometraje" class="negrita">Kilometraje:</label>
                        <div>
                            <input class="form-control" placeholder="10000" required="required" name="kilometraje" type="int"
                                id="kilometraje" value="{{ !empty($vehiculos->kilometraje) ? $vehiculos->kilometraje : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_combustible" class="negrita">Tipo de Combustible:</label>
                        <div>
                            <input class="form-control" placeholder="Gasolina" required="required" name="tipo_combustible" type="text"
                                id="tipo_combustible" value="{{ !empty($vehiculos->tipo_combustible) ? $vehiculos->tipo_combustible : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ultimo_mantenimiento" class="negrita">Último Mantenimiento:</label>
                        <div>
                            <input class="form-control" placeholder="2022-03-31" required="required" name="ultimo_mantenimiento" type="date"
                                id="ultimo_mantenimiento" value="{{ !empty($vehiculos->ultimo_mantenimiento) ? $vehiculos->ultimo_mantenimiento : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_vehiculo" class="negrita">Tipo de Vehiculo:</label>
                        <select class="form-control" required="required" name="tipo_vehiculo" id="tipo_vehiculo">
                            <option value="Moto" {{ $vehiculos->tipo_vehiculo == 'Moto' ? 'selected' : '' }}>Moto</option>
                            <option value="Carro" {{ $vehiculos->tipo_vehiculo == 'Carro' ? 'selected' : '' }}>Carro</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('cita.index') }}" class="btn btn-warning">Cancelar</a>
                    <br><br>
                </form>
            @endif
            </div>
        </section>
    </div>
</div>
@endsection
