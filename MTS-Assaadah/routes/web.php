<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('page.index');
});

Route::get('/identitas', function() {
    return view('page.identitas');
});

Route::get('/alamat', function() {
    return view('page.alamat');
});

Route::get('/index', function () {
    return view('page.index');
});

 // REGISTRASI

Route::get('/register', function () {
    return view('page.register');
});

Route::get('/page', [RegisterController::class, 'register']);

// route untuk memberikan function store dari RegisterController kepada /register yang mana methodnya POST
Route::post('/register', [RegisterController::class, 'store']);
