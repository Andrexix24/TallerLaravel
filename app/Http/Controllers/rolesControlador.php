<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Http\Request;

class rolesControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = role::all();
        return view('roles.listar', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('roles/registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rol=new role();
        $rol->rol=$request->input('nombre');

        $rol->save();

        return redirect()->route('roles.listar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $role = Role::find($id);
        return view('roles.eliminar', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $roles = role::find($id);
        return view('roles.editar', compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $rol = role::find($id);
        $rol->rol=$request->input('nombre');

        $rol->save();

        return redirect()->route('roles.listar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $rol = Role::find($id);
        $rol->delete();
        return redirect()->route('roles.listar');
    }
}
