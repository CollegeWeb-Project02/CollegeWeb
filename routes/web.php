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

Route::prefix('/')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\Front\AboutController::class, 'addDiscount']);
});
Route::prefix('about')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\AboutController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\Front\AboutController::class, 'addDiscount']);
});

Route::prefix('course')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\CourseController::class, 'index']);
    Route::get('/course-details/{id}', [\App\Http\Controllers\Front\CourseController::class, 'show']);
    Route::get('/subject-details/{subjectId}', [\App\Http\Controllers\Front\CourseController::class, 'subject']);
    Route::post('/course-details/{id}', [\App\Http\Controllers\Front\CourseController::class, 'addRegister']);
});

Route::prefix('teacher')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\TeacherController::class, 'teacher']);
});

Route::prefix('account')->group(function() {
    Route::get('login', [\App\Http\Controllers\Front\AccountController::class, 'login']);
    Route::post('login', [\App\Http\Controllers\Front\AccountController::class, 'checkLogin']);

    Route::get('logout', [\App\Http\Controllers\Front\AccountController::class, 'logout']);

    Route::get('register', [\App\Http\Controllers\Front\AccountController::class, 'register']);
    Route::post('register', [\App\Http\Controllers\Front\AccountController::class, 'postRegister']);
});

Route::prefix('blog')->group(function() {
    Route::get('/', [\App\Http\Controllers\Front\BlogController::class, 'index']);
    Route::get('/single/{id}', [\App\Http\Controllers\Front\BlogController::class, 'blogid']);
    Route::post('/single/{id}', [\App\Http\Controllers\Front\BlogController::class, 'addComment']);
});

Route::prefix('contact')->group(function() {
    Route::get('/', function (){
        return view('front.menu.contact');
    });
    Route::post('/', [\App\Http\Controllers\Front\AboutController::class, 'addContact']);
});

// Dashboard Admin
Route::prefix('admin')->group(function() {
    Route::resource('index',\App\Http\Controllers\Admin\UserController::class);
    Route::get('profile', [\App\Http\Controllers\Admin\UserController::class, 'profile']);
    Route::get('logout', [\App\Http\Controllers\Front\AccountController::class, 'logoutAdmin']);
    Route::get('user', [\App\Http\Controllers\Admin\UserController::class, 'getUser']);

    Route::resource('teacher', \App\Http\Controllers\Admin\TeacherController::class);
    Route::resource('student', \App\Http\Controllers\Admin\StudentController::class);
    Route::resource('course', \App\Http\Controllers\Admin\CourseController::class);
    Route::resource('register', \App\Http\Controllers\Admin\RegisterController::class);
    Route::resource('class', \App\Http\Controllers\Admin\ClassController::class);
    Route::resource('discountmail', \App\Http\Controllers\Admin\AboutController::class);
    Route::resource('contactmail', \App\Http\Controllers\Admin\ContactController::class);

    Route::get('mail/contact', [\App\Http\Controllers\Admin\ContactController::class, 'getContactMail']);

    Route::get('register/{id}', [\App\Http\Controllers\Admin\RegisterController::class, 'updateStatus']);
});

//Route::resource('register/check', \App\Http\Controllers\Admin\RegisterController::class);
Route::get('register/filter1', [\App\Http\Controllers\Admin\RegisterController::class, 'checkRegister']);
//
//Route::prefix('class')->group(function (){
//    Route::get('allclass', [\App\Http\Controllers\Admin\ClassController::class, 'index']);
//    Route::get('addclass', [\App\Http\Controllers\Admin\ClassController::class, 'storeClass']);
//    Route::get('addclass', [\App\Http\Controllers\Admin\ClassController::class, 'addClass']);
//});
