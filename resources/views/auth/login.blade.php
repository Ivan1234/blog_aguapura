@extends('layouts.auth')

@section('titulo', 'Inicio de sesión')

@section('contenido')
<div class="w-full max-w-md p-8 space-y-6 bg-slate-800 rounded-xl shadow-2xl border border-slate-700">
    
    <div class="text-center">
        <h2 class="text-3xl font-bold text-white">Bienvenido</h2>
        <p class="text-slate-400 mt-2">Ingresa tus credenciales para acceder</p>
    </div>

    @if ($errors->any())
        <div class="p-3 rounded bg-red-500/10 border border-red-500/50 text-red-400 text-sm">
            Hubo un problema con tus datos.
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-slate-300">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required 
                class="w-full mt-1 px-4 py-2 bg-slate-700 border border-slate-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                placeholder="nombre@ejemplo.com">
            @error('email')
                <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-slate-300">Contraseña</label>
            <input type="password" name="password" id="password" required 
                class="w-full mt-1 px-4 py-2 bg-slate-700 border border-slate-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                placeholder="••••••••">
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" 
                    class="w-4 h-4 rounded bg-slate-700 border-slate-600 text-blue-600 focus:ring-blue-500">
                <label for="remember" class="ml-2 text-sm text-slate-400">Recordarme</label>
            </div>
            <a href="{{ route('forgot_password_view') }}" class="text-sm text-blue-400 hover:text-blue-300 transition-colors">¿Olvidaste tu contraseña?</a>
        </div>

        <button type="submit" 
            class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-slate-800 transition-all">
            Iniciar Sesión
        </button>
    </form>

    <p class="text-center text-sm text-slate-500">
        ¿No tienes cuenta? 
        <a href="{{ route('register_view') }}" class="text-blue-400 hover:underline">Regístrate aquí</a>
    </p>
</div>
@endsection