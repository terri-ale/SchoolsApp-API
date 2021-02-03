<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TeacherController;











Route::resource('school', SchoolController::class, ['except'=> ['create', 'edit']]);
Route::resource('teacher', TeacherController::class, ['except'=> ['create', 'edit']]);


Route::post('save_image', [TeacherController::class, 'save_image'])->name('save_image');
Route::get('school_and_teachers', [SchoolController::class, 'school_and_teachers'])->name('school_and_teachers');
Route::get('teachers_of/{id}', [TeacherController::class, 'teachers_of'])->name('teachers_of');
