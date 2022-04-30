<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerroController;

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
//perro actions
Route::group(['prefix' => '/perro'], function() {
    Route::get('/',   [ PerroController::class, 'index'] )->name('todos');
    Route::get('/show/{id}',  [ PerroController::class, 'show'] )->name('ver');
    Route::get('/create/',   [ PerroController::class, 'create'] )->name('crear');
    Route::get('/edit/{id}',   [PerroController::class, 'edit'] )->name('actualizar');
    //user actions
    Route::post('/nuevo',   [ PerroController::class, 'store'] )->name('nuevoPerro');
    Route::put('/update',   [PerroController::class, 'updatePerro'] )->name('actualizarPerro');
    Route::get('/delete/{id}',   [ PerroController::class, 'destroy'] )->name('borrarPerro');
});
