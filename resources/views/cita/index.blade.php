@extends('layouts.mainc')

@section('content_cita')
<div class="container">
    <h1>Vehículos</h1>
    <a href="{{ route('vehiculo.create') }}" class="btn btn-success mt-4 ml-3 mb-4">Agregar Vehículo</a>
    <a href="{{ url('imprimirVehiculos') }}" class="pull-right">
        <button class="btn btn-success">Imprimir Pdf</button>
    </a>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>CC</th>
                <th>Año</th>
                <th>Kilometraje</th>
                <th>Tipo de Combustible</th>
                <th>Último Mantenimiento</th>
                <th>Tipo de Vehículo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
            <tr>
                <td class="v-align-middle">{{ $vehiculo->placa }}</td>
                <td class="v-align-middle">{{ $vehiculo->marca }}</td>
                <td class="v-align-middle">{{ $vehiculo->color }}</td>
                <td class="v-align-middle">{{ $vehiculo->modelo }}</td>
                <td class="v-align-middle">{{ $vehiculo->cc }}</td>
                <td class="v-align-middle">{{ $vehiculo->año }}</td>
                <td class="v-align-middle">{{ $vehiculo->kilometraje }}</td>
                <td class="v-align-middle">{{ $vehiculo->tipo_combustible }}</td>
                <td class="v-align-middle">{{ $vehiculo->ultimo_mantenimiento }}</td>
                <td class="v-align-middle">{{ $vehiculo->tipo_vehiculo }}</td>
                <td class="v-align-middle">
                    <form action="" method="POST" class="form-horizontal" role="form">
                        @csrf
                        <a href="{{ route('vehiculo.show', $vehiculo->id) }}" class="btn btn-dark">Detalles</a>
                        <a href="{{ route('vehiculo.edit', $vehiculo->id) }}" class="btn btn-primary">Editar</a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $vehiculo->id }}">
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </a>
                    </form>
                </td>
            </tr>
            @include('vehiculo.form.modal')
            @endforeach
        </tbody>
    </table>

    <h1>Citas</h1>
    <a href="{{ route('cita.create') }}" class="btn btn-success mt-4 ml-3 mb-4">Agregar Cita</a>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Placa</th>
                <th>Tipo de Vehículo</th>
                <th>Tipo de Taller</th>
                <th>Fecha</th>
                <th>Taller</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
            <tr>
                <td class="v-align-middle">{{ $cita->nombre }}</td>
                <td class="v-align-middle">{{ $cita->placa }}</td>
                <td class="v-align-middle">{{ $cita->tipo_vehiculo }}</td>
                <td class="v-align-middle">{{ $cita->tipo_taller }}</td>
                <td class="v-align-middle">{{ $cita->fecha }}</td>
                <td class="v-align-middle">{{ $cita->taller }}</td>
                <td class="v-align-middle">
                    <form action="" method="POST" class="form-horizontal" role="form">
                        @csrf
                        <a href="{{ route('cita.show', $cita->id) }}" class="btn btn-dark">Detalles</a>
                        <a href="{{ route('cita.edit', $cita->id) }}" class="btn btn-primary">Editar</a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $cita->id }}">
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </a>
                    </form>
                </td>
            </tr>
            @include('cita.form.modal')
            @endforeach
        </tbody>
    </table>
</div>
@endsection
