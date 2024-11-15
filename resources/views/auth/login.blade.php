@extends('layouts.app1')

@section('content')

<form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-floating mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label for="floatingInput">Ingresar Email</label>


        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-floating mb-4">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password">
        <label for="floatingPassword">Ingresar Contraseña</label>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
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


    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Iniciar Sesión</button>

    @if (Route::has('register'))
    <p class="text-center mb-0">¿No tienes cuenta? <a href="{{ route('register') }}">Registrase</a></p>
    @endif

    </div>
    </div>
</form>

@endsection