<?php

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
    return view('Home');
});

Auth::routes();

Route::resource('unidades', App\Http\Controllers\UnidadeController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);
Route::resource('puestos', App\Http\Controllers\PuestoController::class);
Route::resource('tlicencias', App\Http\Controllers\TlicenciaController::class);
Route::resource('licencias', App\Http\Controllers\LicenciaController::class);
Route::resource('talleres', App\Http\Controllers\TallereController::class);
Route::resource('preventivos', App\Http\Controllers\PreventivoController::class);
Route::resource('correctivos', App\Http\Controllers\CorrectivoController::class);
Route::resource('estados', App\Http\Controllers\EstadoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
