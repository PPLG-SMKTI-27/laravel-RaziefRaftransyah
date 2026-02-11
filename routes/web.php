<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('porto');

Route::middleware(['auth'])->group(function () {

    Route::view('/dashboard', 'dashboard')
        ->middleware('verified')
        ->name('dashboard');

    
});
Route::get('/projects', [ProjectController::class, 'index'])
        ->name('project');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
