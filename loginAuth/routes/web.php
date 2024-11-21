<?php

use App\Http\Controllers\LoginAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.default');
});
Route::get('/login',[LoginAuthController::class,'login']);
Route::get('/register',[LoginAuthController::class,'register']);
Route::post('/login',[LoginAuthController::class,'LoginAuthCheck'])->name('login.post');
Route::post('/register',[LoginAuthController::class,'registerAuthCheck'])->name('register.post');
Route::view('/dash','dash')->middleware('auth')->name('home');