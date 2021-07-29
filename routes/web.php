<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginStudentController;
use App\Http\Controllers\LoginTeacherController;
use App\Http\Controllers\MainClassController;
use App\Http\Controllers\MainProfileController;
use App\Http\Controllers\MainSubjectController;
use App\Http\Controllers\MainTheoryController;
use App\Http\Controllers\ProfileStudentController;
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

Route::get('/Class', [ClassController::class, 'index'])->name('class');
Route::get('/ClassMain', [MainClassController::class, 'index'])->name('mainClass');

Route::get('/Subject', [SubjectController::class, 'index'])->name('subject');
Route::get('/SubjectMain', [MainSubjectController::class, 'index'])->name('MainSubject');

Route::get('/TheoryMain', [MainTheoryController::class, 'index'])->name('mainTheory');

Route::get('/ProfileTeacher', [MainProfileController::class, 'index'])->name('profile');

Route::get('/LoginStudent', [LoginStudentController::class, 'index'])->name('student');
Route::get('/RegisterStudent', [RegisterStudentController::class, 'index'])->name('reStudent');

Route::get('/MyProfile', [ProfileStudentController::class, 'index'])->name('profileStudent');

Route::get('/EditProfileStudent', function () {
    return view('pages.editProfileStudent');
})->name('editProfileStudent');

Route::get('/LoginTeacher', [LoginTeacherController::class, 'index'])->name('Teacher');
Route::get('/RegisterTeacher', [RegisterTeacherController::class, 'index'])->name('reTeacher');


Route::get('/private&policy', function () {
    return view('pages.private');
})->name('private');
Route::get('/tems&condition', function () {
    return view('pages.tems');
})->name('tems');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


