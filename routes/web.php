<?php

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
Route::get('/restaurants',[\App\Http\Controllers\RestaurantsController::class,'index']);
Route::get('/login',[\App\Http\Controllers\AuthController::class,'signIn'])->name('login');
Route::post('/auth',[\App\Http\Controllers\AuthController::class,'auth']);
