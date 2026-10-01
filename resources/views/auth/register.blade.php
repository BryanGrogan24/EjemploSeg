@extends('layouts.guest')

@section('content')
    <p class="mb-2 text-sm font-semibold uppercase tracking-[0.2em] text-violet-400">Empieza aquí</p>
    <h2 class="mb-2 text-3xl font-bold text-white">Crear cuenta</h2>
    <p class="mb-8 text-sm text-slate-400">Completa tus datos para unirte a EjemploSeg.</p>

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="mb-1 block">Nombre</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus class="w-full rounded-xl border border-slate-700 bg-slate-800 px-4 py-3 text-white outline-none transition focus:border-violet-400 focus:ring-2 focus:ring-violet-400/20">
            @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="mb-1 block">Correo electrónico</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full rounded-xl border border-slate-700 bg-slate-800 px-4 py-3 text-white outline-none transition focus:border-violet-400 focus:ring-2 focus:ring-violet-400/20">
            @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="mb-1 block">Contraseña</label>
            <input type="password" id="password" name="password" required class="w-full rounded-xl border border-slate-700 bg-slate-800 px-4 py-3 text-white outline-none transition focus:border-violet-400 focus:ring-2 focus:ring-violet-400/20">
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="mb-1 block">Confirmar contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full rounded-xl border border-slate-700 bg-slate-800 px-4 py-3 text-white outline-none transition focus:border-violet-400 focus:ring-2 focus:ring-violet-400/20">
        </div>

        <button type="submit" class="w-full rounded-xl bg-violet-500 px-4 py-3 font-semibold text-white transition hover:bg-violet-400">Registrarme</button>
        <p class="mt-6 text-center text-sm text-slate-400">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="font-semibold text-violet-300 hover:underline">Inicia sesión</a>
        </p>
    </form>
@endsection
