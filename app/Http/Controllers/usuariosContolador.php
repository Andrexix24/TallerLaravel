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
        $usuarios = usuario::join("roles as r","usuarios.id_rol","=","r.id")
        ->select("usuarios.id","usuarios.nombre","usuarios.apellidos","usuarios.correo","usuarios.telefono","usuarios.direccion","r.rol")
        ->get();
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
        $usuario = usuario::find($id);
        $usuarios=role::all()->where("id","=","$usuario->id_rol");
        return view('usuarios.eliminar', compact('usuario','usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $rol=role::all();
        $usuario=usuario::find($id);
        $roles=role::all()->where("id","=","$usuario->id_rol");
        return view('usuarios.editar', compact('usuario', 'rol','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $usuario=usuario::find($id);
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $usuario=usuario::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.listar');
    }
}
