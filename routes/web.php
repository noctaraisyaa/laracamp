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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('/auth/google', [LoginController::class, 'google'])->name('login.google');
Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('ceklogin:user');
Route::get('checkout/{camps:slug}', [CheckoutController::class, 'index'])->name('checkout');
Route::post('checkout/{camps:slug}', [CheckoutController::class, 'store'])->name('checkout.post');

});