@extends('layouts.plantilla')

@section('title', 'Dashboard')

@section('content')
    <div class="-m-6 min-h-[calc(100vh-4rem)] bg-[radial-gradient(circle_at_top_right,#312e81_0%,#0f172a_40%,#020617_100%)] p-6 text-white lg:-m-10 lg:p-10">
        <div class="mb-10 rounded-3xl border border-white/10 bg-white/5 p-8 shadow-xl backdrop-blur">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">Panel principal</p>
            <h1 class="mt-3 text-3xl font-bold md:text-4xl">¡Bienvenido, {{ Auth::user()->name }}!</h1>
            <p class="mt-3 text-slate-300">Aquí tienes un vistazo general de EjemploSeg.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <article class="rounded-2xl border border-violet-400/20 bg-violet-400/10 p-6 shadow-lg shadow-black/10">
                <p class="text-sm font-medium text-violet-200">Total de personas</p>
                <p class="mt-3 text-4xl font-bold text-white">{{ $totalPersonas }}</p>
            </article>

            <article class="rounded-2xl border border-cyan-400/20 bg-cyan-400/10 p-6 shadow-lg shadow-black/10">
                <p class="text-sm font-medium text-cyan-200">Total de intereses</p>
                <p class="mt-3 text-4xl font-bold text-white">{{ $totalIntereses }}</p>
            </article>

            <article class="rounded-2xl border border-fuchsia-400/20 bg-fuchsia-400/10 p-6 shadow-lg shadow-black/10">
                <p class="text-sm font-medium text-fuchsia-200">Total de usuarios</p>
                <p class="mt-3 text-4xl font-bold text-white">{{ $totalUsuarios }}</p>
            </article>
        </div>
    </div>
@endsection
