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

Route::get('/', [FrontController::class, 'home']);
Route::get('/homepage-with-background', [FrontController::class, 'homeBackground']);
Route::get('/homepage-with-two-columns', [FrontController::class, 'homeTwoColumn']);
