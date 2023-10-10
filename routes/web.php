<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InstructorCourseController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Categories Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/edit/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories_remove/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

// Students Routes
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

// Instructors Routes
Route::get('/instructors', [InstructorController::class, 'index'])->name('instructors.index');
Route::post('/instructors', [InstructorController::class, 'add'])->name('instructors.add');
Route::get('/instructors/edit/{id}', [InstructorController::class, 'edit'])->name('instructors.edit');
Route::post('/instructors/edit/{id}', [InstructorController::class, 'update'])->name('instructors.update');
Route::get('/instructors_remove/{id}', [InstructorController::class, 'delete'])->name('instructors.delete');

// Courses Routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

// InstructorCourse Routes
Route::get('/instructorcourses', [InstructorCourseController::class, 'index'])->name('instructorcourses.index');
Route::get('/instructorcourses/create', [InstructorCourseController::class, 'create'])->name('instructorcourses.create');
Route::post('/instructorcourses', [InstructorCourseController::class, 'store'])->name('instructorcourses.store');
