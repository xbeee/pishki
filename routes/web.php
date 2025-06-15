<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [\App\Http\Controllers\Controller::class,'index']);
Route::get('/menu', [\App\Http\Controllers\Controller::class,'menu']);
Route::get('/about', [\App\Http\Controllers\Controller::class,'about']);
Route::get('/cart', [\App\Http\Controllers\Controller::class,'cart']);
Route::get('/cart-empty', [\App\Http\Controllers\Controller::class,'cart_empty']);
Route::get('/profile', [\App\Http\Controllers\Controller::class,'profile']);
Route::get('/reviews', [\App\Http\Controllers\Controller::class,'reviews']);
Route::get('/adminPanel', [\App\Http\Controllers\Controller::class,'adminPanel']);
Route::get('/contacts', [\App\Http\Controllers\Controller::class,'contacts']);
Route::get('/where', [\App\Http\Controllers\Controller::class,'where']);


Route::post('/api/register', [AuthController::class, 'register'])->name('register');
Route::post('/api/login', [AuthController::class, 'login'])->name('login');
Route::post('/api/logout', [AuthController::class, 'logout'])->name('logout');
