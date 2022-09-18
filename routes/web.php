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
    Route::get('/', function (){
        return view('front.menu.course');
    });
});

Route::prefix('teacher')->group(function() {
    Route::get('/', function (){
        return view('front.menu.teacher');
    });
});

Route::prefix('blog')->group(function() {
    Route::get('/', function (){
        return view('front.menu.blog');
    });
});

Route::prefix('contact')->group(function() {
    Route::get('/', function (){
        return view('front.menu.contact');
    });
});
