<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KategoriController;
use App\Http\Controllers\Frontend\LoginController;
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
 
Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('index');
 });
 
Route::controller(LoginController::class)->group(function() {
    Route::post('/proses_login', 'proses_login')->name('proses_login');
   
 });

 //dashboard
 
Route::controller(DashboardController::class)->group(function() {
    Route::get('/dashboard', 'index')->name('index'); 
    Route::get('/data_video', 'video')->name('video');
    Route::get('/tambah_video', 'tambah_video')->name('tambah_video');
    Route::post('/store_video', 'store_video')->name('store_video');
    Route::get('/play/{slug}', 'play')->name('play');
 });

 