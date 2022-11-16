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

Route::get('/',[TodoController::class,'index'])->name('login');
Route::get('/register',[TodoController::class,'register'])->name('register');
Route::post('/register/input',[TodoController::class,'registerAccount'])->name('register.input');
Route::post('/login',[TodoController::class, 'auth'])->name('login.auth');

Route::get('/dashboard', [TodoController::class, 'indexes']);
Route::get('/add', [TodoController::class, 'create'])->name('add.dashboard');
Route::post('/add', [TodoController::class, 'store'])->name('add.todo');