<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\TravelPackageController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\PklController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('tentang-kami', [AboutController::class, 'index'])->name('tentang-kami');
Route::get('paket-travel', [TravelPackageController::class, 'index'])->name('paket-travel');
Route::get('{travel_package:slug}', [TravelPackageController::class, 'show'])->name('travel.detail');
Route::get('{travel_package:slug}/payment', [OrderController::class, 'show'])->name('travel.payment');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('pkl', [PklController::class, 'index'])->name('pkl');
Route::get('artikel/{post:slug}', [BlogController::class, 'show'])->name('artikel.show');

Route::post('{travel_package:slug}/payment/checkout', [OrderController::class, 'checkout'])->name('payment.checkout');
