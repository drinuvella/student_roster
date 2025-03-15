<?php

use App\Http\Controllers\CollegeController;
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
    return view('welcome');
});

//* Colleges
Route::get('/college', [CollegeController::class,'index'])->name('college.index');

Route::get('/college/create', [CollegeController::class,'create'])->name('college.create');

Route::post('/college',[CollegeController::class,'store'])->name('college.store');

Route::get('/college/{id}/edit',[CollegeController::class,'edit'])->name('college.edit');

Route::put('/college/{id}',[CollegeController::class,'update'])->name('college.update');

Route::delete('/college/{id}',[CollegeController::class,'destroy'])->name('college.destroy');
