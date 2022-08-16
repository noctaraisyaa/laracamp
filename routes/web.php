<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
