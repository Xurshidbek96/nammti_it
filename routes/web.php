<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TimeController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front Routes Start
Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('about', [SiteController::class, 'about'])->name('about');
Route::get('contact', [SiteController::class, 'contact'])->name('contact');
Route::get('courses', [SiteController::class, 'courses'])->name('courses');
Route::post('attends', [SiteController::class, 'attends'])->name('attends');

// Front Routes End

// Auth Start
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Routes

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/home', function(){
        return view('admin.layouts.dashboard');
    })->name('admin.home');

    Route::resource('admin/teachers', TeacherController::class);
    Route::resource('admin/times', TimeController::class);
    Route::resource('admin/groups', GroupController::class);
    Route::resource('admin/students', StudentController::class);

    Route::get('futures/{name}', [StudentController::class, 'futures'])->name('futures');

    Route::get('get_attend', [SiteController::class, 'get_attend'])->middleware(['auth'])->name('get_attend');
    Route::delete('delete_attend/{id}', [SiteController::class, 'delete_attend'])->middleware(['auth'])->name('delete_attend');

});

//Admin Routes End

Route::get('/artisan/{name}',[SiteController::class, 'artisan'])->name('artisan');
