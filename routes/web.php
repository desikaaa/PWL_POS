<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;


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

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);


// Halaman Home projek sebelumnya
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Products (prefix: /category)
Route::get('/category', [ProductController::class, 'index'])->name('category.index');

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('home-care', [ProductController::class, 'homeCare']);
    Route::get('baby-kid', [ProductController::class, 'babyKid']);
});

// Halaman User (route dengan parameter)

Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

// Halaman Penjualan (POS)
Route::get('/pos', [PosController::class, 'index'])->name('pos');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::post('/sales', [SalesController::class, 'store'])->name('sales.store');
