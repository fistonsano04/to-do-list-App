<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::group([AuthController::class], function () {
    Route::post('register', [AuthController::class, 'register'])->name('register.user');
    Route::post('login', [AuthController::class, 'login'])->name('login.user');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('home', function () {
        return view('index');
    })->name('home');
    Route::post('save-task', [taskController::class, 'saveTask'])->name('save.task');
    Route::delete('delete-task/{id}', [taskController::class, 'deleteTask'])->name('deleteTask');
    Route::get('/home', [taskController::class, 'index'])->name('home');
});
