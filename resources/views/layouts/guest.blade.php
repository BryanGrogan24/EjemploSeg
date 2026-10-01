<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjemploSeg - @yield('title', 'Acceso')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 font-sans text-slate-100 antialiased">
    <div class="flex min-h-screen flex-col items-center justify-center bg-[radial-gradient(circle_at_top,#312e81_0%,#0f172a_45%,#020617_100%)] p-6">
        <a href="/" class="mb-8 text-3xl font-black tracking-tight text-white">
            EjemploSeg
        </a>

        <div class="w-full max-w-md rounded-3xl border border-white/10 bg-slate-900/90 p-8 shadow-2xl shadow-black/40 backdrop-blur sm:p-10">
            @if (session('success'))
                <div class="mb-4 rounded-xl border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-emerald-300">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>
