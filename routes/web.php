<?php

use App\Http\Controllers\TrashScalesController;
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

Route::get('/', [ViewController::class, 'home'])->name('index');

Route::get('/trash-scales', [TrashScalesController::class, 'index'])->name('trash-scales');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
