<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckOngkirController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('datauser');

Auth::routes();

Route::get('/datauser', [App\Http\Controllers\DatauserController::class, 'index'])->name('datauser');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

// Route::get("/produk", [App\Http\Controllers\ProdukController::class, 'index']);
// Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
// Route::put('/produk/{id}', [ProdukController::class, 'update']);
// Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);

Route::resource("/produk", ProdukController::class);
Route::get('/produk/{id}/edit', 'ProdukController@edit')->name('produk.edit');
Route::put('/produk/{id}', 'ProdukController@update')->name('produk.update');
Route::delete('/produk/{id}', 'ProdukController@destroy')->name('produk.destroy');

Route::get('/cek-ongkir', [CheckOngkirController::class, 'cekongkir']);
Route::post('/hitung-ongkir', [CheckOngkirController::class, 'hitungongkir']);
Route::get('/provinces', [CheckOngkirController::class, 'province'])->name('provinces');
Route::get('/cities', [CheckOngkirController::class, 'city'])->name('cities');