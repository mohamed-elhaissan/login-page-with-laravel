<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.default');
});
Route::get('/login',function(){
    return view('login');
});