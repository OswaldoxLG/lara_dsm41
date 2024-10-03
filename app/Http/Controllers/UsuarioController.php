<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('vistas.create');
    }

    public function store(Request $request)
    {
        //dd(vars:$request->all());
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios',
        ]);
        Usuarios::create($validatedData);
//
        Usuarios::create(attributes: [
            'nombre' => $validatedData['nombre'],
            'email' => $validatedData['email'],
        ]);
        
        return redirect()->route('usuario.creado')->with('success','Usuario creado correctamente');

        //dd(vars: $validated);
    }
}
