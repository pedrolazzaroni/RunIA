<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function(){
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('new', [TrainingController::class, 'new'])->name('new.training');
    Route::post('create', [TrainingController::class, 'create'])->name('create.training');
    Route::get('training/history', [TrainingController::class, 'history'])->name('training.history');
    Route::get('training/delete/{id}', [TrainingController::class, 'delete'])->name('training.delete');
});
