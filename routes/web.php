<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;

Route::get('/', function () {
    return view('porto');
});

Route::get('/project', function () {
    return view('project');
});
