<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileInformationController;





Route::get('/', HomeController::class);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/profile/{identifier}', [ProfileInformationController::class, '__invoke']);

// // menampilkan data
// Route::get('/tasks', [TaskController::class, 'index']);
// // memasukan data
// Route::post('/tasks', [TaskController::class, 'store']);
// //mengubah data
// Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('/tasks/{id}', [TaskController::class, 'update']);
// // delete data
// Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

Route::resource('/tasks', TaskController::class);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:username}', [UserController::class, 'show'])->name('users.show');
