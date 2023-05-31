<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/vaccine', [HomeController::class, 'vaccine']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/reservation', [HomeController::class, 'reservation']);

Route::get('/profile', [HomeController::class, 'profile']);

Route::get('/janji_temu', [AdminController::class, 'janjiTemu']);

Route::get('/vaksin', [AdminController::class, 'vaksin']);

Route::get('/lakes', [AdminController::class, 'lakes']);

Route::get('/imunisasi', [AdminController::class, 'imunisasi']);

Route::get('/tambah_imunisasi', [AdminController::class, 'tambahImunisasi']);

Route::get('/tambah_lakes', [AdminController::class, 'tambahLakes']);

Route::get('/tambah_vaksin', [AdminController::class, 'tambahVaksin']);

Route::get('/ubah_imunisasi', [AdminController::class, 'ubahVaksin']);

Route::get('/ubah_lakes', [AdminController::class, 'ubahLakes']);

Route::get('/ubah_vaksin', [AdminController::class, 'ubahVaksin']);










Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
