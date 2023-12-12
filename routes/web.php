<?php

use App\Http\Controllers\categoriasControlador;
use App\Http\Controllers\clientesControlador;
use App\Http\Controllers\productosControlador;
use App\Http\Controllers\proveedoresControler;
use App\Http\Controllers\rolesControlador;
use App\Http\Controllers\usuariosContolador;
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
Route::get('/categorias/registrar', [categoriasControlador::class,'create'])->name('categorias.formulario');
Route::post('/categorias/registrar', [categoriasControlador::class,'store'])->name('categorias.registrar');
Route::get('/categorias/editar/{id}', [categoriasControlador::class, 'edit'])->name('categorias.editar');
Route::post('/categorias/actualizar/{id}', [categoriasControlador::class, 'update'])->name('categorias.actualizar');


// productos rutas 
Route::get('/productos', [productosControlador::class,'index'])->name('productos.listar');
Route::get('/productos/registrar', [productosControlador::class,'create'])->name('productos.formulario');
Route::post('/productos/registrar', [productosControlador::class,'store'])->name('productos.registrar');
Route::get('/productos/editar/{id}', [productosControlador::class, 'edit'])->name('productos.editar');
Route::post('/productos/actualizar/{id}', [productosControlador::class, 'update'])->name('productos.actualizar');


// clientes rutas 
Route::get('/clientes', [clientesControlador::class,'index'])->name('clientes.listar');
Route::get('/clientes/registrar', [clientesControlador::class,'create'])->name('clientes.formulario');
Route::post('/clientes/registrar', [clientesControlador::class,'store'])->name('clientes.registrar');
Route::get('/clientes/editar/{id}', [clientesControlador::class, 'edit'])->name('clientes.editar');
Route::post('/clientes/actualizar/{id}', [clientesControlador::class, 'update'])->name('clientes.actualizar');

// proveedores rutas 
Route::get('/proveedores', [proveedoresControler::class,'index'])->name('proveedores.listar');
Route::get('/proveedores/registrar', [proveedoresControler::class,'create'])->name('proveedores.formulario');
Route::post('/proveedores/registrar', [proveedoresControler::class,'store'])->name('proveedores.registrar');
Route::get('/proveedores/editar/{id}', [proveedoresControler::class, 'edit'])->name('proveedores.editar');
Route::post('/proveedores/actualizar/{id}', [proveedoresControler::class, 'update'])->name('proveedores.actualizar');


// roles listar 
Route::get('/roles', [rolesControlador::class,'index'])->name('roles.listar');
Route::get('/roles/registrar', [rolesControlador::class,'create'])->name('roles.formulario');
Route::post('/roles/registrar', [rolesControlador::class,'store'])->name('roles.registrar');

// usuarios listar 
Route::get('/usuarios', [usuariosContolador::class,'index'])->name('usuarios.listar');
Route::get('/usuarios/registrar', [usuariosContolador::class,'create'])->name('usuarios.formulario');
Route::post('/usuarios/registrar', [usuariosContolador::class,'store'])->name('usuarios.registrar');