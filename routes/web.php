<?php

use App\Models\User;
use Inertia\Inertia;
use App\Models\Wisata;
use App\Models\Cluster;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ClusterController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        $totalUser = User::count();
        $totalWisata = Wisata::count();
        $totalCluster = Cluster::count();

        return Inertia::render('dashboard', [
            'totalUser' => $totalUser,
            'totalWisata' => $totalWisata,
            'totalCluster' => $totalCluster,
        ]);
    })->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('wisatas', WisataController::class);
    Route::resource('clusters', ClusterController::class);
    Route::resource('kmeans', WisataController::class);
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
