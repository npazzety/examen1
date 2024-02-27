<?php

use App\Http\Controllers\VuelosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsientoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [VuelosController::class,'index'])->name('menu.index');
Route::get('/asiento', [TipoAsientoController::class,'show'])->name('asientos.inicio');
Route::get('/vuelos', [VuelosController::class,'show'])->name('vuelos.inicio');
Route::get('/asiento/crear', [TipoAsientoController::class,'show'])->name('asientos.crear');
Route::get('/asiento/actualizar', [TipoAsientoController::class,'actualizar'])->name('asientos.actualizar');
Route::get('/asiento/eliminar', [TipoAsientoController::class,'eliminar'])->name('asientos.eliminar');
Route::get('/asiento/destroy',[TipoAsientoController::class,'destroy'])->name('asientos.destroy');
Route::get('/vuelos/crear', [VuelosController::class,'create'])->name('vuelos.crear');
Route::get('/vuelos/eliminar', [VuelosController::class,'eliminar'])->name('vuelos.eliminar');
Route::get('/vuelos/destroy', [VuelosController::class,'destroy'])->name('vuelos.destroy');
