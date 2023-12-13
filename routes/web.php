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
Route::get('/categorias/eliminar/{id}', [categoriasControlador::class, 'show'])->name('categorias.confirmar');
Route::post('/categorias/eliminar/{id}', [categoriasControlador::class, 'destroy'])->name('categorias.eliminar');



// productos rutas 
Route::get('/productos', [productosControlador::class,'index'])->name('productos.listar');
Route::get('/productos/registrar', [productosControlador::class,'create'])->name('productos.formulario');
Route::post('/productos/registrar', [productosControlador::class,'store'])->name('productos.registrar');
Route::get('/productos/editar/{id}', [productosControlador::class, 'edit'])->name('productos.editar');
Route::post('/productos/actualizar/{id}', [productosControlador::class, 'update'])->name('productos.actualizar');
Route::get('/productos/eliminar/{id}', [productosControlador::class, 'show'])->name('productos.confirmar');
Route::post('/productos/eliminar/{id}', [productosControlador::class, 'destroy'])->name('productos.eliminar');



// clientes rutas 
Route::get('/clientes', [clientesControlador::class,'index'])->name('clientes.listar');
Route::get('/clientes/registrar', [clientesControlador::class,'create'])->name('clientes.formulario');
Route::post('/clientes/registrar', [clientesControlador::class,'store'])->name('clientes.registrar');
Route::get('/clientes/editar/{id}', [clientesControlador::class, 'edit'])->name('clientes.editar');
Route::post('/clientes/actualizar/{id}', [clientesControlador::class, 'update'])->name('clientes.actualizar');
Route::get('/clientes/eliminar/{id}', [clientesControlador::class, 'show'])->name('clientes.confirmar');
Route::post('/clientes/eliminar/{id}', [clientesControlador::class, 'destroy'])->name('clientes.eliminar');

// proveedores rutas 
Route::get('/proveedores', [proveedoresControler::class,'index'])->name('proveedores.listar');
Route::get('/proveedores/registrar', [proveedoresControler::class,'create'])->name('proveedores.formulario');
Route::post('/proveedores/registrar', [proveedoresControler::class,'store'])->name('proveedores.registrar');
Route::get('/proveedores/editar/{id}', [proveedoresControler::class, 'edit'])->name('proveedores.editar');
Route::post('/proveedores/actualizar/{id}', [proveedoresControler::class, 'update'])->name('proveedores.actualizar');
Route::get('/proveedores/eliminar/{id}', [proveedoresControler::class, 'show'])->name('proveedores.confirmar');
Route::post('/proveedores/eliminar/{id}', [proveedoresControler::class, 'destroy'])->name('proveedores.eliminar');


// roles rutas
Route::get('/roles', [rolesControlador::class,'index'])->name('roles.listar');
Route::get('/roles/registrar', [rolesControlador::class,'create'])->name('roles.formulario');
Route::post('/roles/registrar', [rolesControlador::class,'store'])->name('roles.registrar');
Route::get('/roles/editar/{id}', [rolesControlador::class, 'edit'])->name('roles.editar');
Route::post('/roles/actualizar/{id}', [rolesControlador::class, 'update'])->name('roles.actualizar');
Route::get('/roles/eliminar/{id}', [rolesControlador::class, 'show'])->name('roles.confirmar');
Route::post('/roles/eliminar/{id}', [rolesControlador::class, 'destroy'])->name('roles.eliminar');

// usuarios rutas
Route::get('/usuarios', [usuariosContolador::class,'index'])->name('usuarios.listar');
Route::get('/usuarios/registrar', [usuariosContolador::class,'create'])->name('usuarios.formulario');
Route::post('/usuarios/registrar', [usuariosContolador::class,'store'])->name('usuarios.registrar');
Route::get('/usuarios/editar/{id}', [usuariosContolador::class, 'edit'])->name('usuarios.editar');
Route::post('/usuarios/actualizar/{id}', [usuariosContolador::class, 'update'])->name('usuarios.actualizar');
Route::get('/usuarios/eliminar/{id}', [usuariosContolador::class, 'show'])->name('usuarios.confirmar');
Route::post('/usuarios/eliminar/{id}', [usuariosContolador::class, 'destroy'])->name('usuarios.eliminar');