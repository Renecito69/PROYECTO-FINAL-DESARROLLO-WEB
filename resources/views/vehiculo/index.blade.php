@extends('layouts.main')
@section('content_vehiculo')
<div class="panel-body">
    <a href="{{ route('vehiculo.create') }}" class="btn btn-primary mb-3">Agregar Vehículo</a>
    <a href="{{ url('imprimirVehiculos') }}" class="btn btn-success mb-3 float-end">Imprimir PDF</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>CC</th>
                <th>Año</th>
                <th>Kilometraje</th>
                <th>Último Mantenimiento</th>
                <th>Tipo de Vehículo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->placa }}</td>
                <td>{{ $vehiculo->marca }}</td>
                <td>{{ $vehiculo->color }}</td>
                <td>{{ $vehiculo->modelo }}</td>
                <td>{{ $vehiculo->cc }}</td>
                <td>{{ $vehiculo->año }}</td>
                <td>{{ $vehiculo->kilometraje }}</td>
                <td>{{ $vehiculo->ultimo_mantenimiento }}</td>
                <td>{{ $vehiculo->tipo_vehiculo }}</td>
                <td>
                    <a href="{{ route('vehiculo.show',$vehiculo->id) }}" class="btn btn-info btn-sm">Detalles</a>
                    <a href="{{ route('vehiculo.edit',$vehiculo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$vehiculo->id}}">Eliminar</button>
                </td>
            </tr>
            @include('vehiculo.form.modal')
            @endforeach
        </tbody>
    </table>
</div>
@endsection
