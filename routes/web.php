<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
     //students
        Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
        Route::get('/students',[StudentController::class,'index'])->name('student.index');
        Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
        Route::get('/student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
        Route::put('/student/{id}/update',[StudentController::class,'update'])->name('student.update');
        Route::delete('/student/{id}/delete',[StudentController::class,'destroy'])->name('student.destroy');




        Route::get('/students/report', [StudentController::class, 'report'])->name('student.report');


//courses
Route::get('/course/create',[CourseController::class,'create'])->name('course.create');
Route::get('/courses',[CourseController::class,'index'])->name('course.index');
Route::post('/course/store',[CourseController::class,'store'])->name('course.store');
Route::get('/course/{id}/edit',[CourseController::class,'edit'])->name('course.edit');
Route::put('/course/{id}/update',[CourseController::class,'update'])->name('course.update');
Route::delete('/course/{id}/delete',[CourseController::class,'destroy'])->name('course.destroy');


//enrollments
Route::get('/enrollment/create',[EnrollmentController::class,'create'])->name('enrollment.create');
Route::get('/enrollment', [EnrollmentController::class, 'index'])->name('enrollment.index');
Route::post('/enrollment/store', [EnrollmentController::class, 'store'])->name('enrollment.store');
Route::get('/enrollment/{id}/edit', [EnrollmentController::class, 'edit'])->name('enrollment.edit');

Route::post('/enrollment/{id}', [EnrollmentController::class, 'update'])->name('enrollment.update');

Route::delete('/enrollment/{id}/delete',[EnrollmentController::class,'destroy'])->name('enrollment.destroy');
});

