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

//Inicio
Route::get('/', [App\Http\Controllers\TareasController::class, 'index']);

//Buscador
Route::get('tareas/buscador', [App\Http\Controllers\TareasController::class, 'search'])->name('tareas/buscador');

//Funciones para tareas
Route::resource('tareas', App\Http\Controllers\TareasController::class);