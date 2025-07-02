<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::check()) {
        return view('home'); // pengguna sudah login
    } else {
        return view('welcome'); // pengguna belum login
    }
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', fn () => view('home'))->middleware('auth');
Route::get('/menu', [MenuController::class, 'index'])->middleware('auth');
Route::get('/riwayat', fn () => view('riwayat'))->middleware('auth');
Route::get('/profil', fn () => view('profil'))->middleware('auth');

Route::get('/pesan/{id}', [OrderController::class, 'showForm'])->middleware('auth');
Route::post('/pesan', [OrderController::class, 'submitOrder'])->middleware('auth');
