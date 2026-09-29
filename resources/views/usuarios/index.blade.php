@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
    <div class="mb-6">
        <p class="text-sm font-semibold uppercase tracking-widest text-purple-600">Seguridad</p>
        <h1 class="mt-1 text-3xl font-bold">Gestión de usuarios</h1>
    </div>

    <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200">
                <thead class="bg-slate-50">
                    <tr class="text-left text-xs font-bold uppercase tracking-wider text-slate-500">
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Nombre</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Registro</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($usuarios as $usuario)
                        <tr class="transition hover:bg-slate-50">
                            <td class="px-6 py-4 text-sm text-slate-500">{{ $usuario->id }}</td>
                            <td class="px-6 py-4 font-medium">{{ $usuario->name }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $usuario->email }}</td>
                            <td class="px-6 py-4 text-sm text-slate-500">{{ $usuario->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-slate-500">No hay usuarios registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
