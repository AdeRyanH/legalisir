<?php

use App\Http\Controllers\validasi;
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

Route::get('/', function () { return view('welcome'); })->name('home');

Route::get('/registrasi', function () { return view('registrasi'); });

Route::get('/admin', function () { return view('admin.login'); })->name('balek')->Middleware('guest');
 
Route::get('/status', function () { return view('status'); });

Route::get('/dashboard', function () { return view('dashboard'); });

Route::get('/preview', 'kontrol@preview');

// Route::get('/validasi', 'validasi@index');

Route::get('/admin/status', 'kontrol@index')->name('dashboard')->Middleware('auth');

Route::get('/admin/kontak', 'kontrol@kontak')->Middleware('auth');

Route::get('/admin/detail/{id}', 'kontrol@edit')->Middleware('auth');

Route::get('/admin/wa', 'kontrol@wa');

// Route::post('/reg', 'kontrol@store');

Route::post('/admin/upd', 'kontrol@update');

Route::post('/log', 'kontrol@authenticate');

Route::post('logout', 'kontrol@logout');


Route::post('/reg', 'kontrol@store');
Route::get('/validasi/', 'Validasi@index');
Route::post('/val/', 'Validasi@store');
Route::get('/detail', 'Proses@index');

Route::get('/status', function () {
    return view('status');
});

Route::post('/diter', 'proses@diterima');