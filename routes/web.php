<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VueloController;

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

Route::get('/', [PrincipalController :: class, 'index'])-> name('principal.index');

Route::get('/tipoAsiento', [TipoAsientoController :: class, 'pri'])-> name('tipAsi.pri');
Route::get('/tipoAseinto/mantenimiento', [TipoAsientoController::class, 'mantenimiento'])-> name('tipAsi.mantenimiento');
Route::get('/tipoAseinto/crear', [TipoAsientoController::class, 'crear'])-> name('tipAsi.crear');
Route::get('/tipoAseinto/mostrar', [TipoAsientoController::class, 'mostrar'])-> name('tipAsi.mostrar');

Route::get('/Vuelos/mantenimiento', [VueloController::class, 'mantenimiento'])-> name('vuelo.mantenimiento');
Route::get('/Vuelos/crear', [VueloController::class, 'crear'])-> name('vuelo.crear');
Route::get('/Vuelos/mostrar', [VueloController::class, 'mostrar'])-> name('vuelo.mostrar');