<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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





Route::middleware('isLogin')->group(function () {
    Route::get('/dashboard', [TodoController::class, 'indexes'])->name('dashboard');
    Route::get('/add', [TodoController::class, 'create'])->name('add.dashboard');
    Route::post('/add', [TodoController::class, 'store'])->name('add');
    Route::delete('/delete/{id}', [TodoController::class, 'destroy'])->name('delete');
    Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [TodoController::class, 'update'])->name('update');
    Route::patch('/complated/{id}', [TodoController::class, 'updateComplated'])->name('complated');
});

Route::middleware('isGuest')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('login');
    Route::get('/register', [TodoController::class, 'register'])->name('register');
    Route::post('/register/input', [TodoController::class, 'registerAccount'])->name('register.input');
    Route::post('/login', [TodoController::class, 'auth'])->name('login.auth');
});


Route::get('/logout', [TodoController::class, 'logout'])->name('logout');
