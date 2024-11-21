<?php

use App\Http\Controllers\LoginAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.default');
});
Route::get('/login',[LoginAuthController::class,'login']);
Route::post('/login',[LoginAuthController::class,'LoginAuthCheck'])->name('login.post');
