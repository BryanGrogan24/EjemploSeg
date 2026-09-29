@extends('layouts.plantilla')

@section('title', 'Crear persona')

@section('content')
    <div class="mx-auto max-w-3xl">
        <div class="mb-6">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">Personas</p>
            <h1 class="mt-1 text-3xl font-bold">Registrar nueva persona</h1>
            <p class="mt-2 text-slate-600">Completa los datos y selecciona uno o varios intereses.</p>
        </div>

        <form action="{{ route('personas.store') }}" method="POST" class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
            @csrf

            <div class="mb-5">
                <label for="nombre" class="mb-2 block text-sm font-semibold">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required autofocus
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                @error('nombre')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="mb-2 block text-sm font-semibold">Correo electrónico</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <fieldset class="mb-7">
                <legend class="mb-3 text-sm font-semibold">Intereses</legend>
                <div class="grid gap-3 sm:grid-cols-2">
                    @forelse ($intereses as $interes)
                        <label class="flex cursor-pointer items-start gap-3 rounded-lg border border-slate-200 p-3 transition hover:border-blue-300 hover:bg-blue-50">
                            <input type="checkbox" name="intereses[]" value="{{ $interes->id }}"
                                @checked(in_array($interes->id, old('intereses', [])))
                                class="mt-1 size-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                            <span>
                                <span class="block font-medium">{{ $interes->nombre }}</span>
                                @if ($interes->descripcion)
                                    <span class="text-sm text-slate-500">{{ $interes->descripcion }}</span>
                                @endif
                            </span>
                        </label>
                    @empty
                        <p class="col-span-full rounded-lg bg-amber-50 p-4 text-sm text-amber-800">
                            Primero registra al menos un interés.
                        </p>
                    @endforelse
                </div>
                @error('intereses')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </fieldset>

            <button type="submit" class="rounded-lg bg-blue-600 px-5 py-3 font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200">
                Guardar persona
            </button>
        </form>
    </div>
@endsection
