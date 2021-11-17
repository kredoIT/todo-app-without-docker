<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index'])->name('index');

Route::get('/{id}/edit', [TodoController::class, 'edit'])->name('edit');

Route::post('/store', [TodoController::class, 'store'])->name('store');

Route::patch('/{id}/update', [TodoController::class, 'update'])->name('update');

Route::delete('/{id}/destroy', [TodoController::class, 'destroy'])->name('destroy');
