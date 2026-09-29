<aside class="hidden w-64 shrink-0 border-r border-slate-200 bg-white shadow-sm md:block">
    <div class="sticky top-0 p-5">
        <h3 class="mb-2 text-xs font-bold uppercase tracking-widest text-slate-400">Navegación</h3>
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" class="block rounded-lg px-4 py-2.5 font-medium transition hover:bg-blue-50 hover:text-blue-700">
                    Panel principal
                </a>
            </li>
            <li>
                <a href="{{ route('intereses.create') }}" class="block rounded-lg px-4 py-2.5 font-medium transition hover:bg-blue-50 hover:text-blue-700">
                    Crear interés
                </a>
            </li>
            <li>
                <a href="{{ route('personas.create') }}" class="block rounded-lg px-4 py-2.5 font-medium transition hover:bg-blue-50 hover:text-blue-700">
                    Crear persona
                </a>
            </li>
        </ul>

        <h3 class="mb-2 mt-8 text-xs font-bold uppercase tracking-widest text-slate-400">Seguridad</h3>
        <ul>
            <li>
                <a href="{{ route('usuarios.index') }}" class="block rounded-lg px-4 py-2.5 font-medium transition hover:bg-blue-50 hover:text-blue-700">
                    Gestión de usuarios
                </a>
            </li>
        </ul>
    </div>
</aside>
