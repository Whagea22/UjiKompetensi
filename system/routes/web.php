<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\Profile;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// Produk //
Route::get('/Admin/produk', [ProdukController::class, 'index']);
Route::get('/Admin/produk/create', [ProdukController::class, 'create']);
Route::post('/Admin/produk', [ProdukController::class, 'store']);

// Galery //
Route::get('/Admin/galery', [GaleryController::class, 'index']);
Route::get('/Admin/galery/create', [GaleryController::class, 'create']);

// User //
Route::get('/Admin/user', [UserController::class, 'index']);
Route::get('/Admin/user/create', [UserController::class, 'create']);
Route::post('/Admin/user', [UserController::class, 'store']);




Route::prefix('Admin')->group(function(){
    Route::controller(Admindashboard::class)->group(function(){
    Route::get('/dashboard','index');
    });

    Route::controller(Profile::class)->group(function(){
        Route::get('/profile','index');
        Route::post('/profile/{admin}','update');
    });
});
