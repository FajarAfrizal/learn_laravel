<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

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
    return view('halaman.index');
});

Route::get('/kantin',function(){
    return view('halaman.kantin');
});

Route::get('/martikulasi',function(){
    return view('halaman.martikulasi');
});

Route::get('/sejarah',function(){
    return view('halaman.sejarah');
});

Route::get('/perpustakaan',function(){
    return view('halaman.perpustakaan');
});