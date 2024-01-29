<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\WorkController;

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

Route::get('/d', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('stamping');
})->middleware(['auth'])->name('stamping');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('stamping');
});

Route::get('/attendance', function () {
    return view('day');
});

Route::get('/attendance', [WorkController::class, 'day']);



