<?php

use App\Http\Controllers\PrestamoController;
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

Route::resource('clientes', App\Http\Controllers\ClienteController::class);

Route::get('/prestamos/search', [PrestamoController::class, 'search'])->name('prestamos.search');


Route::resource('prestamos', App\Http\Controllers\PrestamoController::class);
//Route::get('prestamos/search', [PrestamoController::class, 'search'])->name('prestamos.search');

//Route::get('prestamos/index', [PrestamoController::class, 'index'])->name('prestamos.index');

Route::resource('cuotas', App\Http\Controllers\CuotaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


