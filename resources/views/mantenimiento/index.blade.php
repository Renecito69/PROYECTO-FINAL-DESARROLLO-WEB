@extends('layouts.mainm')


@section('content_mantenimiento')
<a href="{{ route('mantenimiento.create') }}" class="btn btn-success mt-4 ml-3 mb-4">
    Agregar </a>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Placa</th>
            <th>Kilometraje Actual</th>
            <th>Ultima revision</th>
            <th>Tipo de vehiculo</th>
            <th>Tipo de taller </th>
        </tr>
    </thead>
    <tbody>
        @foreach($mantenimiento as $mantenimiento) <tr>
            <td class="v-align-middle">{{$mantenimiento->placa}}</td>
            <td class="v-align-middle">{{$mantenimiento->kilometraje}}</td>
            <td class="v-align-middle">{{$mantenimiento->ultimo_mantenimiento}}</td>
            <td class="v-align-middle">{{$mantenimiento->tipo_vehiculo}}</td>
            <td class="v-aling-middle">{{$mantenimiento->tipo_taller}}</td>
            <td class="v-align-middle">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('mantenimiento.show',$mantenimiento->id) }}" class="btn btn-dark">Detalles</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$mantenimiento->id}}">
                        <button type="button" class="btn btn-danger"> Eliminar</button> </a>
                </form>
            </td>
        </tr> 

        @include('mantenimiento.form.modal')

        @endforeach

    </tbody>
</table>
@endsection
