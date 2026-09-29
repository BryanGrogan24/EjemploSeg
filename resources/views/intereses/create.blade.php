@extends('layouts.plantilla')

@section('title', 'Crear interés')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-6">
            <p class="text-sm font-semibold uppercase tracking-widest text-emerald-600">Intereses</p>
            <h1 class="mt-1 text-3xl font-bold">Registrar nuevo interés</h1>
        </div>

        <form action="{{ route('intereses.store') }}" method="POST" class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
            @csrf

            <div class="mb-5">
                <label for="nombre" class="mb-2 block text-sm font-semibold">Nombre del interés</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required autofocus
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100">
                @error('nombre')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-7">
                <label for="descripcion" class="mb-2 block text-sm font-semibold">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="4"
                    class="w-full resize-y rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="rounded-lg bg-emerald-600 px-5 py-3 font-semibold text-white shadow-sm transition hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-emerald-200">
                Guardar interés
            </button>
        </form>
    </div>
@endsection
