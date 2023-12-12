<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use App\Models\producto;
use Illuminate\Http\Request;

class productosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $producto = producto::join("categorias as c", "productos.id_categoria","=","c.id")
        ->select("productos.id","productos.nombre","productos.descripcion","productos.precio","c.categoria")
        ->get();
        // return compact('producto');
        return view('productos.listar', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias=categoria::all();
        return view('productos.registrar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto=new producto();
        $producto->nombre=$request->input('nombre');
        $producto->descripcion=$request->input('descripcion');
        $producto->precio=$request->input('precio');
        $producto->id_categoria=$request->input('categoria');

        $producto->save();

        return redirect()->route('productos.listar');
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
        $categorias=categoria::all();
        $producto = producto::find($id);
        $productos=categoria::all()->where("id","=","$producto->id_categoria");
        return view('productos.editar', compact('producto','categorias', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $producto=producto::find($id);
        $producto->nombre=$request->input('nombre');
        $producto->descripcion=$request->input('descripcion');
        $producto->precio=$request->input('precio');
        $producto->id_categoria=$request->input('categoria');

        $producto->save();

        return redirect()->route('productos.listar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
