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
    return view('welcome');
});

Auth::routes();

Route::resource('unidades', App\Http\Controllers\UnidadeController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);
Route::resource('puestos', App\Http\Controllers\PuestoController::class);
Route::resource('tlicencias', App\Http\Controllers\TlicenciaController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
