<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Route::get(
    '/dashboard',
    [UserController::class, 'dashboard']
)->middleware(['auth'])->name('dashboard');

Route::get(
    '/student',
    [StudentController::class, 'show']
)->name('student_show');

Route::get('/add_student', function () {
    return view('add_student');
});

Route::post(
    '/insert_student',
    [StudentController::class, 'insert_student']
)->name('insert_student');

Route::get(
    '/detail_student/{id}',
    [StudentController::class, 'detail_student']
)->name('detail_student');

Route::get(
    '/edit_student/{id}',
    [StudentController::class, 'edit_student']
)->name('edit_student');

Route::post(
    '/update_student/{id}',
    [StudentController::class, 'update_student']
)->name('update_student');

Route::get(
    '/delete_student/{id}',
    [StudentController::class, 'delete_student']
)->name('delete_student');

require __DIR__ . '/auth.php';
