<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LikeController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
    Route::get('/mypage', [AuthController::class, 'showMypage']);
    Route::get('logout', [AuthController::class, 'getLogout']);
    Route::post('/done', [BookingController::class, 'store']);
    Route::get('/detail/:{id}', [ShopController::class, 'showDetail'])->name('detail');
});

Route::post('/thanks', [AuthController::class, 'thanks']);