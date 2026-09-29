<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Interes;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $intereses = Interes::orderBy('nombre')->get();

        return view('personas.create', compact('intereses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:personas,email'],
            'intereses' => ['nullable', 'array'],
            'intereses.*' => ['integer', 'exists:intereses,id'],
        ]);

        $persona = Persona::create([
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
        ]);

        $persona->intereses()->sync($validated['intereses'] ?? []);

        return redirect()
            ->route('personas.create')
            ->with('success', 'Persona creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
