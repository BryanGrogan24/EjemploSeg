<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - EjemploSeg</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="grid min-h-screen place-items-center bg-slate-950 p-6 text-slate-900">
    <main class="w-full max-w-md rounded-2xl bg-white p-8 shadow-2xl">
        <p class="text-sm font-bold uppercase tracking-widest text-blue-600">EjemploSeg</p>
        <h1 class="mt-2 text-3xl font-bold">Iniciar sesión</h1>
        <p class="mt-2 text-slate-500">Ingresa para acceder al panel.</p>

        <form method="POST" action="{{ route('login.store') }}" class="mt-7 space-y-5">
            @csrf

            <div>
                <label for="email" class="mb-2 block text-sm font-semibold">Correo electrónico</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="email"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="mb-2 block text-sm font-semibold">Contraseña</label>
                <input id="password" name="password" type="password" required autocomplete="current-password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
            </div>

            <label class="flex items-center gap-2 text-sm text-slate-600">
                <input type="checkbox" name="remember" class="rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                Recordarme
            </label>

            <button type="submit" class="w-full rounded-lg bg-blue-600 px-5 py-3 font-semibold text-white transition hover:bg-blue-700">
                Entrar
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-600">
            ¿No tienes una cuenta?
            <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:underline">Regístrate</a>
        </p>
    </main>
</body>
</html>
