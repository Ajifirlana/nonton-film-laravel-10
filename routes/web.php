<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KategoriController;
use App\Http\Controllers\Frontend\TentangController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    
    Route::get('/film/{slug}', 'show')->name('show');
 });
 
Route::controller(KategoriController::class)->group(function() {
    Route::get('/kategori/{nama}', 'show')->name('show');
 });
 
Route::controller(TentangController::class)->group(function() {
    Route::get('/tentang', 'index')->name('index');
 });