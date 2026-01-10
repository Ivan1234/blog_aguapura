@extends('layouts.auth')

@section('contenido')
<div class="w-full max-w-md p-8 space-y-6 bg-slate-800 rounded-xl shadow-2xl border border-slate-700">
    <div class="text-center">
        <h2 class="text-3xl font-bold text-white">Crear cuenta</h2>
        <p class="text-slate-400 mt-2">Únete a nuestra plataforma hoy mismo</p>
    </div>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-slate-300">Nombre completo</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required 
                class="w-full mt-1 px-4 py-2 bg-slate-700 border border-slate-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                placeholder="Juan Pérez">
            @error('name') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-slate-300">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required 
                class="w-full mt-1 px-4 py-2 bg-slate-700 border border-slate-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                placeholder="correo@ejemplo.com">
            @error('email') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-slate-300">Teléfono celular</label>
            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required 
                class="w-full mt-1 px-4 py-2 bg-slate-700 border border-slate-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                placeholder="5512345678">
            @error('phone') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-slate-300">Contraseña</label>
            <input type="password" name="password" id="password" required 
                class="w-full mt-1 px-4 py-2 bg-slate-700 border border-slate-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                placeholder="••••••••">
            @error('password') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-slate-300">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required 
                class="w-full mt-1 px-4 py-2 bg-slate-700 border border-slate-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                placeholder="••••••••">
        </div>

        <button type="submit" 
            class="w-full py-3 px-4 mt-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition-all">
            Registrarse
        </button>
    </form>

    <p class="text-center text-sm text-slate-500">
        ¿Ya tienes una cuenta? 
        <a href="{{ route('login_view') }}" class="text-blue-400 hover:underline">Inicia sesión</a>
    </p>
</div>
@endsection