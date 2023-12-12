<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\role;
use App\Models\usuario;
use Illuminate\Http\Request;

class usuariosContolador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios = usuario::join("roles","usuarios.id_rol","=","roles.id")->get();
        return view('usuarios.listar', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rol=role::all();
        return view('usuarios.registrar', compact('rol'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario=new usuario();
        $usuario->nombre=$request->input('nombre');
        $usuario->apellidos=$request->input('apellidos');
        $usuario->correo=$request->input('correo');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');
        $usuario->id_rol=$request->input('rol');

        $usuario->save();

        return redirect()->route('usuarios.listar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
