<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SekcieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('RCSirotar');
});
Route::get('/', [SekcieController::class, 'index'])->name('home.show');
Route::get('/home', [SekcieController::class, 'index'])->name('home.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
