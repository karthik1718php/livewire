<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('/adminuser', [App\Http\Controllers\Admin\UserController::class, 'getData']);
Route::get('/user', [App\Http\Controllers\User\UserController::class, 'getData']);
