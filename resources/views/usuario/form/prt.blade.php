@extends('layouts.mainu')

@section('content_usuario')
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if ( empty ( $user->id) )
                <form method="POST" action="{{ route('usuario.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="negrita">Nombre Usuario:</label>
                        <div>
                            <input class="form-control" placeholder="Nombre del Usuario" required="required"
                                name="name" type="text" id="name">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="negrita">Email:</label>
                        <div>
                            <input class="form-control" placeholder="Email Usuario" required="required" name="email"
                                type="text" id="email">
                        </div>
                    </div>
                    <div class="mb-3">

                    <label for="fecha_nacimiento" class="negrita">Fecha Nacimiento:</label>
                        <div>
                            <input class="form-control" placeholder="Fecha Nacimiento Usuario" required="required" name="fecha_nacimiento"
                                type="date" id="fecha_nacimiento">
                        </div>
                    </div>
                    <div class="mb-3">

                    <label for="celular" class="negrita">Celular:</label>
                        <div>
                            <input class="form-control" placeholder="Celular Usuario" required="required" name="celular"
                                type="text" id="celular">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="negrita">Contraseña:</label>
                        <div>
                            <input class="form-control" placeholder="Contraseña" required="required"
                                name="password" type="" id="password">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('usuario.index') }}" class="btn btn-warning">Cancelar</a>
                    <br><br>
                </form>
                @else
                <form method="POST" action="{{ route('usuario.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Aquí irían los campos existentes -->

                    <div class="mb-3">
                        <label for="name" class="negrita">Nombre Usuario:</label>
                        <div>
                            <input class="form-control" placeholder="Nombre del Usuario" required="required"
                                name="name" type="text" id="name"
                                value="{{ !empty($user->name) ? $user->name : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="negrita">Email:</label>
                        <div>
                            <input class="form-control" placeholder="Email" required="required" name="email"
                                type="text" id="email" value="{{ !empty($user->email) ? $user->email : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="negrita">Fecha Nacimiento:</label>
                        <div>
                            <input class="form-control" placeholder="Fecha Nacimiento" required="required" name="fecha_nacimiento"
                                type="date" id="fecha_nacimiento" value="{{ !empty($user->fecha_nacimiento) ? $user->fecha_nacimiento : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="negrita">Celular:</label>
                        <div>
                            <input class="form-control" placeholder="Celular" required="required" name="celular"
                                type="text" id="celular" value="{{ !empty($user->celular) ? $user->celular : '' }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="negrita">Contraseña:</label>
                        <div>
                            <input class="form-control" placeholder="Contraseña" required="required"
                                name="password" type="text" id="password"
                                value="{{ !empty($user->password) ? $user->password : '' }}">
                        </div>
                    </div>                    

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('usuario.index') }}" class="btn btn-warning">Cancelar</a>
                    <br><br>
                </form>
                @endif
            </div>
        </section>
    </div>
</div>
@endsection