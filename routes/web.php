<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('porto');
});

Route::get('/project', [ProjectController::class, 'index']);


Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'authenticate']);