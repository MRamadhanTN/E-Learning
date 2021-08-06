<?php

use App\Http\Controllers\Auth\LoginStudentController;
use App\Http\Controllers\Auth\RegisterStudentController;
use App\Http\Controllers\Auth\LoginTeacherController;
use App\Http\Controllers\Auth\RegisterTeacherController;

use App\Http\Controllers\LandingpageController;

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardClassController;
use App\Http\Controllers\Dashboard\DashboardCommentController;
use App\Http\Controllers\Dashboard\DashboardSubjectController;
use App\Http\Controllers\Dashboard\DashboardTheoryController;
use App\Http\Controllers\Dashboard\DashboardVideoController;

use App\Http\Controllers\ProfileStudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\Dashboard\DashboardUserAdmin;
use App\Http\Controllers\MainClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\MainSubjectController;
use App\Http\Controllers\MainTheoryController;
use App\Http\Controllers\MainProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/Dashboard/Admin', [DashboardUserAdmin::class, 'index'])->name('Admin');
Route::get('/Dashboard/Admin/Edit', [DashboardUserAdmin::class, 'edit'])->name('AdminEdit');

Route::get('/Dashboard/Class', [DashboardClassController::class,'index'])->name('dashboardClass');
Route::get('/Dashboard/Class/Create', [DashboardClassController::class,'create'])->name('classCreate');
Route::get('/Dashboard/Class/Detail', [DashboardClassController::class,'show'])->name('classDetail');
Route::get('/Dashboard/Class/Edit', [DashboardClassController::class,'edit'])->name('classEdit');

Route::get('Dashboard/Subject', [DashboardSubjectController::class, 'index'])->name('dashboardSubject');
Route::get('Dashboard/Subject/Create', [DashboardSubjectController::class, 'create'])->name('subjectCreate');
Route::get('Dashboard/Subject/Detail', [DashboardSubjectController::class, 'show'])->name('subjectDetail');
Route::get('Dashboard/Subject/Edit', [DashboardSubjectController::class, 'edit'])->name('subjectEdit');

Route::get('/Dashboard/Theory', [DashboardTheoryController::class, 'index'])->name('dashboardTheory');
Route::get('/Dashboard/Theory/Create', [DashboardTheoryController::class, 'create'])->name('theoryCreate');
Route::get('/Dashboard/Theory/Detail', [DashboardTheoryController::class, 'show'])->name('theoryDetail');
Route::get('/Dashboard/Theory/Edit', [DashboardTheoryController::class, 'edit'])->name('theoryEdit');

Route::get('/Dashboard/Video', [DashboardVideoController::class, 'index'])->name('dashboardVideo');
Route::get('/Dashboard/Video/Create', [DashboardVideoController::class, 'create'])->name('videoCreate');
Route::get('/Dashboard/Video/Detail', [DashboardVideoController::class, 'show'])->name('videoDetail');
Route::get('/Dashboard/Video/Edit', [DashboardVideoController::class, 'edit'])->name('videoEdit');


Route::get('/Dashboard/Comment', [DashboardCommentController::class, 'index'])->name('dashboardComment');

