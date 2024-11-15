@extends('layouts.mainu')
@section('content_usuario')
@if (Auth::user()->hasRole('user'))
<a href="{{ route('usuario.create') }}" class="btn btn-success mt-4 ml-3 mb-4">
    Agregar </a>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nombre Usuario</th>
            <th>Email</th>
            <th>Fecha Nacimiento</th>
            <th>Celular</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $usuario) <tr>
            <td class="v-align-middle">{{$usuario->name}}</td>
            <td class="v-align-middle">{{$usuario->email}}</td>
            <td class="v-align-middle">{{$usuario->fecha_nacimiento}}</td>
            <td class="v-align-middle">{{$usuario->celular}}</td>                        
            <td class="v-align-middle">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('usuario.show',$usuario->id) }}" class="btn btn-dark">Detalles</a>
                    <a href="{{ route('usuario.edit',$usuario->id) }}" class="btn btn-primary">Editar</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$usuario->id}}">
                        <button type="button" class="btn btn-danger"> Eliminar</button> </a>
                </form>
            </td>
        </tr>

        @include('usuario.form.modal')

        @endforeach

    </tbody>
</table>
@endif
@endsection
