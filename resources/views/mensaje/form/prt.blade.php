@extends('layouts.mainm')

@section('content_mensajes')
<div class="alert alert-danger mt-3 d-none" id="mensaje-error"
role="alert"></div>
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if ( empty ( $mensajes->id) )
                <form method="POST" action="{{ route('mensaje.store') }}">
                    @csrf

                   
                    <div class="mb-3">
                        <label for="users_id" class="negrita">nombre:</label>
                        <select class="form-control" required="required" name="users_id" id="users_id" data-livesearch="true" >

                            <option value="" disabled selected>Seleccione el usuario</option>
                            @foreach($mensajes as $mens)
                            <option value="{{$mens->id}}">{{$mens->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre del taller:</label>
                        <div>
                        <input class="form-control" placeholder="nombre" required="required" name="nombre"
                                type="text" id="nombre">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="mensaje" class="negrita">Mensaje:</label>
                        <div>
                        <input class="form-control" placeholder="mensaje" required="required" name="mensaje"
                                type="text" id="mensaje">
                        </div>
                    </div>
                   

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('mensaje.index') }}" class="btn btn-warning">Cancelar</a>
                    <br><br>
                </form>
                

                @else
                <form method="POST" action="{{ route('cita.update', $citas->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Aquí irían los campos existentes -->

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label>
                        <div>
                            <input class="form-control" placeholder="Nombre" required="required"
                                name="nombre" type="text" id="nombre"
                                value="{{ !empty($citas->nombre) ? $citas->nombre : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="runt" class="negrita">placa:</label>
                        <div>
                            <input class="form-control" placeholder="Placa" required="required" name="placa"
                                type="text" id="placa" value="{{ !empty($citas->placa) ? $citas->placa : '' }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tipo_vehiculo" class="negrita">Tipo de Vehiculo:</label>
                        <select class="form-control" required="required" name="tipo_vehiculo" id="tipo_vehiculo">
                            <option value="Moto" {{ $citas->tipo_vehiculo == 'Moto' ? 'selected' : '' }}>
                                Moto
                            </option>
                            <option value="Carro" {{ $citas->tipo_vehiculo == 'carro' ? 'selected' : '' }}>Carro
                            </option>
                        </select>
                    </div>
    
                    <div class="mb-3">
                        <label for="tipo_taller" class="negrita">Tipo de Taller:</label>
                        <select class="form-control" required="required" name="tipo_taller" id="tipo_taller" data-livesearch="true" onchange="buscarTaller()">
                        <option value="" disabled selected>Seleccione el Tipo de taller</option>
                            @foreach($tipo_taller as $tip_t)
                            <option value="{{$tip_t->id}}">{{$tip_t->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="negrita">Fecha:</label>
                        <div>
                            <input class="form-control"  required="required"
                                name="fecha" type="date" id="fecha"
                                value="{{ !empty($citas->fecha) ? $citas->fecha : '' }}">
                        </div>
                    </div>

                    <div class="mb-3">
                         <label for="fecha" class="negrita">taller:</label>
                                <select class="form-control" required="required" name="taller" id="talleres" data-livesearch="true" >
                            <option value="" disabled selected>Seleccione el taller</option>
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