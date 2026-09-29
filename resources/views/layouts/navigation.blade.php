<nav class="flex h-16 items-center justify-between bg-slate-900 px-6 text-white shadow-lg">
    <a href="{{ route('dashboard') }}" class="text-xl font-bold tracking-tight">
        EjemploSeg
    </a>

    <div class="flex items-center gap-4 text-sm">
        <span class="hidden text-slate-300 sm:inline">
            {{ Auth::user()->name }}
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="rounded-lg border border-slate-600 px-3 py-2 font-semibold transition hover:bg-slate-800">
                Cerrar sesión
            </button>
        </form>
    </div>
</nav>
