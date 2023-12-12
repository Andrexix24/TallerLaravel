<?php

use App\Http\Controllers\categoriasControlador;
use App\Http\Controllers\clientesControlador;
use App\Http\Controllers\productosControlador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
})->name('inicio');

// categorias rutas
Route::get('/categorias', [categoriasControlador::class,'index'])->name('categorias.listar');


// productos rutas 
Route::get('/productos', [productosControlador::class,'index'])->name('productos.listar');


// clientes rutas 
Route::get('/clientes', [clientesControlador::class,'index'])->name('clientes.listar');