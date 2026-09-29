@extends('layouts.plantilla')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">Panel principal</p>
        <h1 class="mt-1 text-3xl font-bold">¡Bienvenido, {{ Auth::user()->name }}!</h1>
        <p class="mt-2 text-slate-600">Resumen general de EjemploSeg.</p>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <article class="rounded-2xl border-l-4 border-blue-500 bg-white p-6 shadow-sm">
            <p class="text-sm font-medium text-slate-500">Total de personas</p>
            <p class="mt-2 text-4xl font-bold text-slate-900">{{ $totalPersonas }}</p>
        </article>

        <article class="rounded-2xl border-l-4 border-emerald-500 bg-white p-6 shadow-sm">
            <p class="text-sm font-medium text-slate-500">Total de intereses</p>
            <p class="mt-2 text-4xl font-bold text-slate-900">{{ $totalIntereses }}</p>
        </article>

        <article class="rounded-2xl border-l-4 border-purple-500 bg-white p-6 shadow-sm">
            <p class="text-sm font-medium text-slate-500">Total de usuarios</p>
            <p class="mt-2 text-4xl font-bold text-slate-900">{{ $totalUsuarios }}</p>
        </article>
    </div>
@endsection
