<?php

use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ElearningController;
use App\Http\Controllers\EncyclopediaController;
use App\Http\Controllers\Home2Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
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

// home
// profile
// news
// elearning
// track delivery
// parts encyclopedia

Route::get('/regis', [HomeController::class, 'index']);

Route::get('/', [Home2Controller::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/elearning', [ElearningController::class, 'index']);

Route::get('/delivery', [DeliveryController::class, 'index']);

Route::get('/encyclopedia', [EncyclopediaController::class, 'index']);

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/news', function () {
//     return view('news');
// });

// Route::get('/elearning', function () {
//     return view('elearning');
// });

// Route::get('/delivery', function () {
//     return view('delivery');
// });

// Route::get('/enclycopedia', function () {
//     return view('encyclopedia');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
