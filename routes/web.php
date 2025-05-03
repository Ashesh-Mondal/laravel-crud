<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add-student', 'add-student-form');
Route::post('insert-student', [StudentController::class, 'insertStudent']);
Route::get('list-students', [StudentController::class, 'listStudents']);
