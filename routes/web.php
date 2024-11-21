<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SekcieController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('RCSirotar');
});


Route::get('/', [SekcieController::class, 'index'])->name('home');
Route::get('/home', [SekcieController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/editor', function () {
        return view('editor');
    })->middleware('isAdmin');

    Route::get('/editor/fontList', function () {
        return view('fontList');
    })->middleware('isAdmin');

    Route::get('/editor', [SekcieController::class, 'index_editor'])->name('editor')->middleware('isAdmin');

    Route::get('/editor_sekcia/{id}/edit', [SekcieController::class, 'edit'])->name('sekcia.edit')->middleware('isAdmin');

    Route::put('/editor_sekcia/{id}', [SekcieController::class, 'update'])->name('sekcia.update')->middleware('isAdmin');



    Route::get('/users', [RoleController::class, 'index'])->name('role.index')->middleware('isHlavnyAdmin');

    Route::post('/users/{user}/assign-role', [RoleController::class, 'priraditRolu'])->name('role.assign')->middleware('isHlavnyAdmin');
});

require __DIR__.'/auth.php';
