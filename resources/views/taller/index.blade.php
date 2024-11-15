@extends('layouts.maint')
@section('content_taller')
<a href="{{ route('taller.create') }}" class="btn btn-success mt-4 ml-3 mb-4">
    Agregar </a>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nombre Taller</th>
            <th>Runt</th>
            <th>Camara Comercio</th>
            <th>Direccion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($talleres as $taller) <tr>
            <td class="v-align-middle">{{$taller->nombre_taller}}</td>
            <td class="v-align-middle">{{$taller->runt}}</td>
            <td class="v-align-middle">{{$taller->camara_comercio}}</td>
            <td class="v-align-middle">{{$taller->direccion}}</td>
            <td class="v-align-middle">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('taller.show',$taller->id) }}" class="btn btn-dark">Detalles</a>
                    <a href="{{ route('taller.edit',$taller->id) }}" class="btn btn-primary">Editar</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$taller->id}}">
                        <button type="button" class="btn btn-danger"> Eliminar</button> </a>
                </form>
            </td>
        </tr>

        @include('taller.form.modal')

        @endforeach

    </tbody>
</table>
@endsection
