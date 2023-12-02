<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComparaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/compara', [ComparaController::class, 'store'])->name('store');
Route::post('/compara/create', [ComparaController::class, 'create'])->name('create');
Route::get('/compara', [ComparaController::class, 'index'])->name('index');
Route::get('/compara/{id}', [ComparaController::class, 'show'])->name('show');
Route::get('/compara/{id}/edit', [ComparaController::class, 'edit'])->name('edit');
Route::put('/compara/{id}', [ComparaController::class, 'update'])->name('update');
Route::delete('/compara/{id}', [ComparaController::class, 'destroy'])->name('destroy');
