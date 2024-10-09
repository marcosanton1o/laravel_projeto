<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'index'])->name('users.create');
Route::post('/users', [UserController::class, 'index'])->name('users.store');
Route::post('/users/{users}', [UserController::class, 'index'])->name('users.show');
Route::post('/users/{users}/edit', [UserController::class, 'index'])->name('users.edit');
Route::put('/users/{users}', [UserController::class, 'index'])->name('users.update');
Route::delete('/users/{users}', [UserController::class, 'index'])->name('users.destroy');