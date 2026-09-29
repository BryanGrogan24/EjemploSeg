<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - EjemploSeg</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="grid min-h-screen place-items-center bg-slate-950 p-6 text-slate-900">
    <main class="w-full max-w-md rounded-2xl bg-white p-8 shadow-2xl">
        <p class="text-sm font-bold uppercase tracking-widest text-blue-600">EjemploSeg</p>
        <h1 class="mt-2 text-3xl font-bold">Crear una cuenta</h1>

        <form method="POST" action="{{ route('register.store') }}" class="mt-7 space-y-5">
            @csrf

            <div>
                <label for="name" class="mb-2 block text-sm font-semibold">Nombre</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="mb-2 block text-sm font-semibold">Correo electrónico</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="mb-2 block text-sm font-semibold">Contraseña</label>
                <input id="password" name="password" type="password" required autocomplete="new-password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="mb-2 block text-sm font-semibold">Confirmar contraseña</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
            </div>

            <button type="submit" class="w-full rounded-lg bg-blue-600 px-5 py-3 font-semibold text-white transition hover:bg-blue-700">
                Registrarme
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-600">
            ¿Ya tienes una cuenta?
            <a href="{{ route('login') }}" class="font-semibold text-blue-600 hover:underline">Inicia sesión</a>
        </p>
    </main>
</body>
</html>
