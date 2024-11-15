@extends('layouts.app1')

@section('content')

<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-floating mb-3">
        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name">
        <label for="floatingInput">Digitar Nombre De Usuario</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


    {{-- Correo electrónico --}}
    <div class="form-floating mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">
        <label for="floatingInput">Digitar Email</label>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    {{-- Contraseña --}}
    <div class="form-floating mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="new-password">
        <label for="floatingPassword">Ingresar Contraseña</label>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    {{-- Confirmación de contraseña --}}
    <div class="form-floating mb-3">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            autocomplete="new-password">
        <label for="password-confirm">Confirmar Contraseña</label>
    </div>

    {{-- Avatar --}}
    <div class="mb-3">
        <label for="avatar" class="form-label">Ingresar Avatar</label>
        <input type="file" class="form-control" id="avatar" name="avatar">
    </div>

    <div class="d-flex align-items-center justify-content-between mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Recordar Usuario') }}
            </label>
        </div>

        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Recordar Contraseña') }}
        </a>
        @endif
    </div>



    <div class="row mb-0">

        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Registrarse</button>

    </div>

    @if (Route::has('login'))
    <p class="text-center mb-0">¿Ya Tienes Una Cuenta? <a href="{{ route('login') }}">Iniciar Sesion</a></p>
    @endif
</form>
@endsection