<?php

use App\Http\Controllers\Api\Authcontroller;
use App\Http\Controllers\Api\Filmcontroller;
use App\Http\Controllers\Api\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api'
], function ($router) {
    Route::post('login_api', [Authcontroller::class, 'login']);
    Route::post('kategori', [KategoriController::class, 'kategori']);
    Route::post('data_film', [Filmcontroller::class, 'data_film']);
});