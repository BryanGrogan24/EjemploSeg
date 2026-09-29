<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $usuarios = User::orderByDesc('created_at')->get();

        return view('usuarios.index', compact('usuarios'));
    }
}
