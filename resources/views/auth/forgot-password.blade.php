@extends('layouts.app')
@section('content')
<h2>Recuperar Contraseña</h2>
<form method="POST" action="{{ route('forgot_password') }}">
    @csrf
    <input type="email" name="email" placeholder="Correo" required>
    <button type="submit">Enviar enlace</button>
    <a href="{{ url('/login') }}" class="link">Volver al login</a>
    @if (session('status'))
        <div class="success">{{ session('status') }}</div>
    @endif
    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif
</form>
@endsection