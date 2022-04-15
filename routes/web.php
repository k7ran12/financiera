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
    return view('auth.login');
});

Auth::routes();

Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');

Route::get('/prestamos/search', [PrestamoController::class, 'search'])->name('prestamos.search')->middleware('auth');

Route::patch('/prestamos/realizarPagoCuota', [PrestamoController::class, 'realizarPagoCuota'])->name('prestamos.realizarPagoCuota')->middleware('auth');

Route::get('/prestamos/buscarXNumOperacion', [PrestamoController::class, 'buscarXNumOperacion'])->name('prestamos.buscarXNumOperacion')->middleware('auth');

Route::get('/prestamos/cuotasCliente', [PrestamoController::class, 'cuotasCliente'])->name('cuotas.cuotasCliente')->middleware('auth');

Route::resource('prestamos', App\Http\Controllers\PrestamoController::class)->middleware('auth');

Route::resource('cuotas', App\Http\Controllers\CuotaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


