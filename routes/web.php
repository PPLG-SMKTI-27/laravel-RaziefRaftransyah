<?php
use App\Http\Controllers\Dashboard\DashboardProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Halaman publik
Route::get('/', [UserController::class, 'index'])->name('page.index');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Dashboard (hanya admin)
Route::middleware(['auth', 'is_admin'])->group(function () {

    // Halaman dashboard utama
    Route::get('/dashboard', [DashboardProjectController::class, 'index'])
    ->middleware(['auth','is_admin'])
    ->name('dashboard');

    // CRUD Project
    Route::prefix('dashboard/projects')->name('dashboard.projects.')->group(function () {
    Route::get('/', [DashboardProjectController::class, 'index'])->name('index');
    Route::get('/create', [DashboardProjectController::class, 'create'])->name('create');
    Route::post('/', [DashboardProjectController::class, 'store'])->name('store');
    Route::get('/{project}/edit', [DashboardProjectController::class, 'edit'])->name('edit');
    Route::put('/{project}', [DashboardProjectController::class, 'update'])->name('update');
    Route::delete('/{project}', [DashboardProjectController::class, 'destroy'])->name('destroy');
});
});

// Profile (hanya user ter-auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';