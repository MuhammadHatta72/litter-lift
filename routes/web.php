<?php

use App\Http\Controllers\Admin\CartTrashController;
use App\Http\Controllers\Admin\SwapTrashController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SwapTrashUserController;
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
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('trash-scales', TrashController::class)
        ->names([
            'index' => 'trash-scales.index',
            'store' => 'trash-scales.store',
            'show' => 'trash-scales.show',
        ]);
    Route::resource('users', UserController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('cart-trash', CartTrashController::class);
    Route::resource('swap-trash', SwapTrashController::class);
    Route::resource('swap-trash-user', SwapTrashUserController::class);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
