<?php

use App\Http\Controllers\FotografieController;
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


    Route::get('/editor/createPhoto', [FotografieController::class, 'create'])->name('foto.create')->middleware('isAdmin');
    Route::post('/editor', [FotografieController::class, 'store'])->name('foto.store')->middleware('isAdmin');


    Route::get('/editor_photo/{id}/edit', [FotografieController::class, 'edit'])->name('foto.edit')->middleware('isAdmin');

    Route::put('/editor_photo/{id}', [FotografieController::class, 'update'])->name('foto.update')->middleware('isAdmin');
    Route::delete('/editor_photo/{id}', [FotografieController::class, 'destroy'])->name('foto.destroy')->middleware('isAdmin');

    Route::get('/get-images/{id}', [SekcieController::class, 'getImages'])->name('get-images')->middleware('isAdmin');
    Route::post('/update-order', [SekcieController::class, 'updateOrder'])->name('update-order')->middleware('isAdmin');



    Route::get('/users', [RoleController::class, 'index'])->name('role.index')->middleware('isHlavnyAdmin');

    Route::post('/users/{user}/assign-role', [RoleController::class, 'priraditRolu'])->name('role.assign')->middleware('isHlavnyAdmin');
});

require __DIR__.'/auth.php';
