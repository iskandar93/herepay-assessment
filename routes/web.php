<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::controller(StudentController::class)->prefix('student')->group(function () {
        Route::get('/list', 'index')->name('student.list');
        Route::get('/template', 'studentDataTemplate')->name('student.template');
        Route::post('/upload', 'upload')->name('student.upload');
        Route::get('/delete/{student}', 'delete')->name('student.delete');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
