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
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('index');

    Route::get('/list-user', [\App\Http\Controllers\UsersController::class, 'index']
    )->name('list-user');

    Route::get('/list-restaurants',[\App\Http\Controllers\RestaurantsController::class,'index']
    )->name('list-restaurants');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/form-user', function (){
        return view('users.form-user');
    })->name('form-user');

    Route::get('/form-restaurants', function (){
        return view('restaurants.form-restaurant');
    })->name('form-restaurants');
});
require __DIR__ . '/auth.php';
