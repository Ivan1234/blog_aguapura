@extends('layouts.app')
@section('content')
<h2>Registrarse</h2>
<form method="POST" action="{{ url('/register') }}">
    @csrf
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
    <button type="submit">Crear Cuenta</button>
    <a href="{{ url('/login') }}" class="link">¿Ya tienes cuenta?</a>
    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif
</form>
@endsection