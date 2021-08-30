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
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login_success', function () {
    return view('successlogin');
});

Route::get('/logout',[App\Http\Controllers\usersController::class,'logout']);


Route::post('/insert_user',[App\Http\Controllers\usersController::class,'insert'])->name('insert.data');

Route::post('/check_login',[App\Http\Controllers\usersController::class,'chack_login'])->name('chack.login');



