<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SekcieController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('RCSirotar');
});

Route::get('/editor', function () {
    return view('editor');
})->middleware('isAdmin');

Route::get('/editor', [SekcieController::class, 'index_editor'])->name('editor')->middleware('isAdmin');

Route::get('/', [SekcieController::class, 'index'])->name('home');
Route::get('/home', [SekcieController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
