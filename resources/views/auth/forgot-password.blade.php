@extends('layouts.auth')

@section('contenido')
<div class="w-full max-w-md p-8 space-y-6 bg-slate-800 rounded-xl shadow-2xl border border-slate-700">
    <div class="text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-500/10 mb-4">
            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
            </svg>
        </div>
        <h2 class="text-3xl font-bold text-white">¿Olvidaste tu contraseña?</h2>
        <p class="text-slate-400 mt-2 text-sm">
            No te preocupes. Introduce tu correo y te enviaremos un enlace para que puedas restablecerla.
        </p>
    </div>

    @if (session('status'))
        <div class="p-4 rounded-lg bg-green-500/10 border border-green-500/50 text-green-400 text-sm">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('forgot_password') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-slate-300">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                class="w-full mt-1 px-4 py-2 bg-slate-700 border border-slate-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                placeholder="nombre@ejemplo.com">
            @error('email')
                <span class="text-xs text-red-400 mt-1">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" 
            class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition-all">
            Enviar enlace de recuperación
        </button>
    </form>

    <div class="text-center">
        <a href="{{ route('login_view') }}" class="text-sm text-slate-400 hover:text-blue-400 transition-colors inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Volver al inicio de sesión
        </a>
    </div>
</div>
@endsection