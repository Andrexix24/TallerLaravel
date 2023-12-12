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
        // $producto=new producto();
        // $producto->nombre=$request->input('nombre');
        // $producto->descripcion=$request->input('descripcion');
        // $producto->precio=$request->input('precio');
        // $producto->id_categoria=$request->input('rol');

        // $producto->save();

        // return redirect()->route('productos.listar');
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
