<?php

use App\Http\Controllers\ProdukController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/',ProdukController::class);
Route::delete('/{id}',[ProdukController::class,'destroy'])->name('produk.destroy');
Route::get('produk/{id}',[ProdukController::class,'edit'])->name('produk.edit');
Route::put('produk/{id}',[ProdukController::class,'update'])->name('produk.update');