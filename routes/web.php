<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');

//Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name ('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name ('logout');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/jenis', [JenisController::class, 'index']);
});

//TABEL JENIS
Route::get('/jenis/tambah', [JenisController::class, 'create']);
Route::POST('/jenis/tambah', [JenisController::class, 'store']);
Route::get('/jenis/edit/{id}', [JenisController::class, 'edit']);
Route::put('/jenis/ubah/{id}', [JenisController::class, 'update']);
Route::get('/jenis/delete/{id}', [JenisController::class, 'delete']); 

//TABEL PELANGGAN
Route::get('/pelanggan', [PelangganController::class, 'index']);
