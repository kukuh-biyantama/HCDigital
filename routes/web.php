<?php

/// routes/web.php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController; // Make sure to import the correct namespace for the controller.

Route::get('/', function () {
    return view('welcome');
});

// Your other routes...

// Include the auth.php file to handle authentication routes
require __DIR__ . '/auth.php';

// Protected routes for authenticated and verified users
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Routes for 'superadmin' role
    Route::middleware(['checkrole:superadmin'])->group(function () {
        Route::get('/admins', [UserController::class, 'indexAdmin'])->name('users.indexadmin');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    // Routes for 'admin' role
    Route::middleware(['checkrole:admin'])->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'editAdmin'])->name('users.editAdmin');
        Route::put('/users/{user}', [UserController::class, 'updateAdmin'])->name('users.updateAdmin');
    });
});
