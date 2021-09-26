<?php

use App\Http\Controllers\Namescontroller;
use App\Http\Controllers\studentscontroller;
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

Route::get('/', function () {
    return view('names.welcome');
});

Route::get('/names/{name}/{age}', [Namescontroller::class, 'names']);
Route::get('/students',[studentscontroller::class,'student'])->name('all.student');
Route::get('/students/{id}',[studentscontroller::class,'studentdetails'])->name('student.details');
Route::get('/student/add',[studentscontroller::class,'createstudent'])->name('student.create');
Route::post('/student/store',[studentscontroller::class,'storestudent'])->name('student.store');
Route::get('/student/edit/{id}',[studentscontroller::class,'editstudent'])->name('student.edit');
Route::put('/student/update/{id}',[studentscontroller::class,'updatestudent'])->name('student.update');
Route::delete('/student/delete/{id}',[studentscontroller::class,'deletestudent'])->name('student.delete');







