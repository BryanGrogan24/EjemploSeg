@extends('layouts.guest')

@section('content')
    <p class="mb-2 text-sm font-semibold uppercase tracking-[0.2em] text-violet-400">Bienvenido de nuevo</p>
    <h2 class="mb-2 text-3xl font-bold text-white">Iniciar sesión</h2>
    <p class="mb-8 text-sm text-slate-400">Accede a tu espacio de trabajo.</p>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="email" class="mb-1 block">Correo electrónico</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus class="w-full rounded-xl border border-slate-700 bg-slate-800 px-4 py-3 text-white outline-none transition focus:border-violet-400 focus:ring-2 focus:ring-violet-400/20">
            @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="mb-1 block">Contraseña</label>
            <input type="password" id="password" name="password" required class="w-full rounded-xl border border-slate-700 bg-slate-800 px-4 py-3 text-white outline-none transition focus:border-violet-400 focus:ring-2 focus:ring-violet-400/20">
        </div>

        <label class="mb-6 flex items-center text-slate-300">
            <input type="checkbox" name="remember">
            <span class="ml-2 text-sm">Recordarme</span>
        </label>

        <button type="submit" class="w-full rounded-xl bg-violet-500 px-4 py-3 font-semibold text-white transition hover:bg-violet-400">Entrar</button>
        <p class="mt-6 text-center text-sm text-slate-400">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}" class="font-semibold text-violet-300 hover:underline">Regístrate</a>
        </p>
    </form>
@endsection
