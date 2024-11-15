@extends('layouts.mainm')

@section('content_mensajes')
    <a href="{{ route('mensaje.create') }}" class="btn btn-success mt-4 ml-3 mb-4">
        Agregar
    </a>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nombre Del Taller</th>
                <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mensajes as $mens)
                <tr>
                    <td class="v-align-middle">{{ $mens->nombre }}</td>
                    <td class="v-align-middle">{{ $mens->mensaje }}</td>
                        <form action="" method="POST" class="form-horizontal" role="form">
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
