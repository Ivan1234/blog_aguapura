@extends('layouts.app')
@section('content')
<h2>Iniciar Sesión</h2>
<form method="POST" action="{{ url('/login') }}">
    @csrf
    <input type="email" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <label><input type="checkbox" name="remember"> Recuérdame</label>
    <button type="submit">Entrar</button>
    <a href="{{ route('password.request') }}" class="link">¿Olvidaste tu contraseña?</a>
    <a href="{{ url('/register') }}" class="link">Registrarse</a>
    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif
</form>
@endsection