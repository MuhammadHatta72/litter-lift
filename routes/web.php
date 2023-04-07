<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\ViewController;
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

// GET
Route::get('/', [ViewController::class, 'home'])->name('index');
Route::get('/leaderboard', [ViewController::class, 'leaderboard'])->name('leaderboard');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/trash-scales', [TrashController::class, 'index'])->name('trash-scales.index');
    Route::post('/trash-scales', [TrashController::class, 'store'])->name('trash-scales.store')->middleware('auth');
});
