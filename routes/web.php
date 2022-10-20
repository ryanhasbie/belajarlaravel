<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
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


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::get('/register', [RegistrationController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegistrationController::class, 'store'])->name('register')->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login')->middleware('guest');

Route::middleware('auth')->group(function() {
    Route::resource('/tasks', TaskController::class);
    Route::post('/logout', LogoutController::class)->name('logout');
});
