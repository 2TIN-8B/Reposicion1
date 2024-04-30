<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\principalController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\proveedorController;

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



Route::get('/principal', [principalController :: class, 'index'])-> name('principal.index');

Route::get('/crear/empleado', [empleadoController :: class, 'crear'])-> name('empleado.crear');
Route::get('/crear/producto', [productoController :: class, 'crear'])-> name('producto.crear');
Route::get('/crear/proveedor', [proveedorController :: class, 'crear'])-> name('proveedor.crear');

Route::get('/mostrar/empleado', [empleadoController :: class, 'mostrar'])-> name('empleado.mostrar');
Route::get('/mostrar/producto', [productoController :: class, 'mostrar'])-> name('producto.mostrar');
Route::get('/mostrar/proveedor', [proveedorController :: class, 'mostrar'])-> name('proveedor.mostrar');

Route::post('/guardar/empleado', [empleadoController :: class, 'guardar'])-> name('empleado.guardar');
Route::post('/guardar/producto', [productoController :: class, 'guardar'])-> name('producto.guardar');
Route::post('/guardar/proveedor', [proveedorController :: class, 'guardar'])-> name('proveedor.guardar');