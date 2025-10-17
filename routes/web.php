<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ClusterController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('wisatas', WisataController::class);
    Route::resource('clusters', ClusterController::class);
    Route::resource('kmeans', WisataController::class);
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
