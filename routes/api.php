<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    route::get('/organization', [OrganizationController::class, 'organization']);

    Route::controller(DepartmentController::class)->group(function () {
        Route::get('/departments', 'index');
        Route::get('/departments/{id}', 'show');
        // Route::get('/staff', 'staff');       // bisa get pake request
        Route::get('/departments/{id}/staff', 'staff');
        // Route::get('/programs', 'program');       // bisa get pake request
        Route::get('/departments/{id}/programs', 'program');
        // Route::get('/programs/{id}', 'show_program');
        Route::get('/departments/{department_id}/programs/{program_id}', 'show_program');
    });

    Route::controller(CourseController::class)->group(function () {
        Route::get('/courses', 'index');
        Route::get('/courses/{id}', 'show');
    });

    Route::controller(TaskController::class)->group(function () {
        Route::get('/tasks', 'index');
        Route::post('/tasks', 'store');
        route::get('/tasks/{id}', 'edit');
        route::put('/tasks/{id}', 'update');
        route::delete('/tasks/{id}', 'destroy');
    });
});
