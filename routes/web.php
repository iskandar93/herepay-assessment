<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->prefix('student')->group(function () {
    Route::get('/list', 'index')->name('student.list');
    Route::get('/template', 'studentDataTemplate')->name('student.template');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
