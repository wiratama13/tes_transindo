<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuMerchantController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class,'showLoginForm'])->name('show-login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('show-register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/sidebar', [HomeController::class, 'profil'])->name('profil');
Route::get('/profile', [HomeController::class, 'profilView'])->name('profil-view');
Route::get('/create', [HomeController::class, 'create'])->name('create-profil');
Route::post('/create', [HomeController::class, 'store'])->name('store-profil');
Route::resource('menu', MenuMerchantController::class);