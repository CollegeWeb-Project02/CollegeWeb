<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within Teacher group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index']);

Route::prefix('about')->group(function() {
    Route::get('/', function (){
        return view('front.menu.about');
    });
});

Route::prefix('course')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\CourseController::class, 'index']);
    Route::get('/course-details/{id}', [\App\Http\Controllers\Front\CourseController::class, 'show']);
    Route::get('/subject/{id}', [\App\Http\Controllers\Front\CourseController::class, 'subject']);
});

Route::prefix('teacher')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\TeacherController::class, 'teacher']);
});

Route::prefix('login')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\AccountController::class, 'login']);
});

Route::prefix('blog')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\BlogController::class, 'index']);
    Route::get('/single/{id}', [\App\Http\Controllers\Front\BlogController::class, 'blogid']);
});

Route::prefix('contact')->group(function() {
    Route::get('/', function (){
        return view('front.menu.contact');
    });
});




