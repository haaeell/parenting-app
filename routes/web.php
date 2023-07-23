<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\KategoriDiskusiController;

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


Route::get('/', [LandingpageController::class, 'index'])->name('welcome');
Route::get('/about', [LandingpageController::class, 'about'])->name('about');
Route::get('/artikel', [LandingpageController::class, 'artikel'])->name('artikel');
Route::get('/test', [LandingpageController::class, 'test'])->name('test');
Route::get('/diskusi', [LandingpageController::class, 'diskusi'])->name('diskusi');
Route::get('/detail-artikel', [LandingpageController::class, 'detailArtikel'])->name('detail-artikel');
Route::get('/detail-diskusi', [LandingpageController::class, 'detailDiskusi'])->name('detail-diskusi');




Route::group(['middleware' => 'admin'], function () {
    Route::resource('users', UserController::class);
    Route::resource('diskusi_admin', DiskusiController::class);
    Route::resource('diskusi', DiskusiController::class);
    Route::resource('kategori-diskusi', KategoriDiskusiController::class);

    Route::post('users/{id}/reset-password', [UserController::class, 'resetPassword'])->name('reset-password');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Auth::routes();

