<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/StudentAcademicReport', function () {
    return view('manage-report.StudentAcademicReport');
});

Route::get('/ClassAcademicReport', function () {
    return view('manage-report.ClassAcademicReport');
});

Route::get('/YearAcademicReport', function () {
    return view('manage-report.YearAcademicReport');
});

Route::get('/ActivityReportList', function () {
    return view('manage-report.ActivityReportList');
});

Route::get('/ActivityReport', function () {
    return view('manage-report.ActivityReport');
});

Route::get('/ActivityReportForm', function () {
    return view('manage-report.ActivityReportForm');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
