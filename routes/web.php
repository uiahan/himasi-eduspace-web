<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AspirationController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\Web\DepartmentController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProgramController;
use App\Http\Controllers\Web\RecruitmentController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'aspiration', 'controller' => AspirationController::class], function () {
    Route::get('/', 'index')->name('aspiration');
    Route::post('/store', 'store')->name('aspiration.store');
});

Route::group(['prefix' => 'recruitment', 'controller' => RecruitmentController::class], function () {
    Route::get('/', 'index')->name('recruitment');
    Route::get('/{recruitment}', 'show')->name('recruitment.show');
    Route::post('/{recruitment}/apply}', 'store')->name('recruitment.store');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/proker', [ProgramController::class, 'index'])->name('program');
Route::get('/proker/{program}', [ProgramController::class, 'show'])->name('program.show');
Route::get('/department/{department}', [DepartmentController::class, 'show'])->name('department');


route::prefix('courses')->controller(CourseController::class)->group(function () {
    route::get('/', 'index')->name('courses.index');
    route::get('/{course}', 'show')->name('courses.show');
    route::get('/{course}/{lesson}', 'showLesson')->name('courses.lesson');
});


Route::get('/health', function () {
    return response()->json([
        'status' => 'ok'
    ], 200);
});

Route::get('/debug-proxy', function () {
    return [
        'secure' => request()->isSecure(),
        'scheme' => request()->getScheme(),
        'proto' => request()->header('x-forwarded-proto'),
        'host' => request()->getHost(),
    ];
});
