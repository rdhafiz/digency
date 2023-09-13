<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/homepage-with-background-image', [FrontController::class, 'home_background_image'])->name('home-background');
Route::get('/homepage-with-two-columns', [FrontController::class, 'home_two_column'])->name('home-two-columns');
Route::get('/homePage-with-background-video', [FrontController::class, 'homePage_with_background_video'])->name('backgroundVideo');
Route::get('/homePage-with-background-parallax-effect', [FrontController::class, 'homePage_with_background_parallaxEffect'])->name('parallaxEffect');
