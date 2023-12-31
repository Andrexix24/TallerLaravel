<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\proveedore;
use Illuminate\Http\Request;

class proveedoresControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $proveedores = proveedore::all();
        return view('proveedores.listar', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proveedores.registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $proveedor=new proveedore();
        $proveedor->nombre=$request->input('nombre');
        $proveedor->direccion=$request->input('direccion');
        $proveedor->telefono=$request->input('telefono');
        $proveedor->correo=$request->input('correo');

        $proveedor->save();

        return redirect()->route('proveedores.listar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $proveedores = proveedore::find($id);
        return view('proveedores.eliminar', compact('proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $proveedor = proveedore::find($id);
        return view('proveedores.editar', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $proveedor=proveedore::find($id);
        $proveedor->nombre=$request->input('nombre');
        $proveedor->direccion=$request->input('direccion');
        $proveedor->telefono=$request->input('telefono');
        $proveedor->correo=$request->input('correo');

        $proveedor->save();

        return redirect()->route('proveedores.listar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $proveedor=proveedore::find($id);
        $proveedor->delete();

        return redirect()->route('proveedores.listar');
    }
}
