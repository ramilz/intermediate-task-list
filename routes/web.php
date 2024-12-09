<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/task', [TaskController::class, 'store']);
Route::delete('/task/{task}', [TaskController::class, 'destroy']);
