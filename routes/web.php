<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('unidades', App\Http\Controllers\UnidadeController::class)->middleware('auth');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class)->middleware('auth');
Route::resource('puestos', App\Http\Controllers\PuestoController::class)->middleware('auth');
Route::resource('tlicencias', App\Http\Controllers\TlicenciaController::class)->middleware('auth');
Route::resource('licencias', App\Http\Controllers\LicenciaController::class)->middleware('auth');
Route::resource('talleres', App\Http\Controllers\TallereController::class)->middleware('auth');
Route::resource('preventivos', App\Http\Controllers\PreventivoController::class)->middleware('auth');
Route::resource('correctivos', App\Http\Controllers\CorrectivoController::class)->middleware('auth');
Route::resource('estados', App\Http\Controllers\EstadoController::class)->middleware('auth');
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('auth');
Auth::routes();


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
