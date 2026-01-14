<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AspirationController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProgramController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'controller' => AuthController::class], function () {
    Route::post('/login', 'login')->name('auth.login');
    Route::post('/logout', 'logout')->name('auth.logout')->middleware('auth:sanctum');
    Route::post('/register', 'register')->name('auth.register');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/proker', [ProgramController::class, 'index'])->name('program');
Route::post('/aspiration/store', [AspirationController::class, 'store'])->name('aspiration.store');