@extends('layouts.app')
@section('content')
<h2>Restablecer Contraseña</h2>
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="email" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Nueva contraseña" required>
    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
    <button type="submit">Restablecer</button>
    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif
</form>
@endsection