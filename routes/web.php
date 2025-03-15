<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('student.index');
});

//* Colleges
Route::get('/college', [CollegeController::class,'index'])->name('college.index');

Route::get('/college/create', [CollegeController::class,'create'])->name('college.create');

Route::post('/college',[CollegeController::class,'store'])->name('college.store');

Route::get('/college/{id}/edit',[CollegeController::class,'edit'])->name('college.edit');

Route::put('/college/{id}',[CollegeController::class,'update'])->name('college.update');

Route::get('/college/{id}',[CollegeController::class,'show'])->name('college.show');

Route::delete('/college/{id}',[CollegeController::class,'destroy'])->name('college.destroy');

//* Students
Route::get('/student', [StudentController::class,'index'])->name('student.index');

Route::get('/student/create', [StudentController::class,'create'])->name('student.create');

Route::post('/student',[StudentController::class,'store'])->name('student.store');

Route::get('/student/{id}/edit',[StudentController::class,'edit'])->name('student.edit');

Route::put('/student/{id}',[StudentController::class,'update'])->name('student.update');

Route::get('/student/{id}',[StudentController::class,'show'])->name('student.show');

Route::delete('/student/{id}',[StudentController::class,'destroy'])->name('student.destroy');