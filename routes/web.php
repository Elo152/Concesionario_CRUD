<?php

use App\Http\Controllers\CocheController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coches', [CocheController::class, 'index'])->name('index');
Route::get('/registro', [CocheController::class, 'create'])->name('registro');
Route::post('/coches', [CocheController::class, 'store'])->name('guardar');
Route::get('/coche/{id}', [CocheController::class, 'show'])->name('mostrar');
Route::get('/coche/{id}/editar', [CocheController::class, 'edit'])->name('editar');
Route::put('/coche/{id}/actualizar', [CocheController::class, 'update'])->name('actualizar');
Route::delete('/coche/{id}/aliminar', [CocheController::class, 'destroy'])->name('eliminar');


