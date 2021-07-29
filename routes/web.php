<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginStudentController;
use App\Http\Controllers\LoginTeacherController;
use App\Http\Controllers\MainClassController;
use App\Http\Controllers\MainProfileController;
use App\Http\Controllers\MainSubjectController;
use App\Http\Controllers\RegisterStudentController;
use App\Http\Controllers\RegisterTeacherController;
use App\Http\Controllers\SubjectController;
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
Route::get('/', [LandingpageController::class, 'index'])->name('landingpage');

Route::get('/home/class', [ClassController::class, 'index'])->name('class');
Route::get('/home/classMain', [MainClassController::class, 'index'])->name('mainClass');

Route::get('/home/subject', [SubjectController::class, 'index'])->name('subject');
Route::get('/home/subjectMain', [MainSubjectController::class, 'index'])->name('MainSubject');

Route::get('/home/profile', [MainProfileController::class, 'index'])->name('profile');

Route::get('/loginStudent', [LoginStudentController::class, 'index'])->name('student');
Route::get('/registerStudent', [RegisterStudentController::class, 'index'])->name('reStudent');

Route::get('/loginTeacher', [LoginTeacherController::class, 'index'])->name('Teacher');
Route::get('/registerTeacher', [RegisterTeacherController::class, 'index'])->name('reTeacher');

Route::get('/private&policy', function () {
    return view('pages.private');
})->name('private');
Route::get('/tems&condition', function () {
    return view('pages.tems');
})->name('tems');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


