<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('brands', BrandController::class);

        // or you can define routes individually if you prefer

    // Route::get('/create', [BrandController::class, 'create'])->name('brands.create');
    // Route::get('/', [BrandController::class, 'index'])->name('brands.index');
    // Route::post('/', [BrandController::class, 'store'])->name('brands.store');
    // Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
    // Route::put('/{id}', [BrandController::class, 'update'])->name('brands.update');
    // Route::delete('/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
});

require __DIR__.'/auth.php';
