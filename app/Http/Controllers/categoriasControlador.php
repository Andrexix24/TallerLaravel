<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use Illuminate\Http\Request;

class categoriasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categoria = categoria::all();
        return view('categorias.listar', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categorias.registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $categoria = new categoria();
        $categoria->categoria =  $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');

        $categoria->save();

        return redirect()->route('categorias.listar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categoria = categoria::find($id);
        return view('categorias.eliminar', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categoria = categoria::find($id);
        return view('categorias.editar', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $categoria = categoria::find($id);
        $categoria->categoria =  $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');

        $categoria->save();

        return redirect()->route('categorias.listar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categoria = categoria::find($id);
        $categoria->delete();

        return redirect()->route('categorias.listar');
    }
}
