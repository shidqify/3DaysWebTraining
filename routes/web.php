<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiSiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LoginController;

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

// Route::GET('/', function () {
//     return view('welcome');
//     // return "Hello World";
// });

// User
Route::GET('/registrasi', [RegistrasiSiswa::class, 'index']);

Route::POST('/registrasi', [RegistrasiSiswa::class, 'store']);

Route::get('/list', [RegistrasiSiswa::class, 'list']);

Route::get('/update/{id}', [RegistrasiSiswa::class, 'edit']);

Route::POST('/update/{id}', [RegistrasiSiswa::class, 'update']);

Route::GET('/delete/{id}', [RegistrasiSiswa::class, 'delete']);

// Artikel
Route::GET('/input', [ArtikelController::class, 'inputArtikel']);
Route::POST('/input', [ArtikelController::class, 'storeArtikel']);
Route::GET('/listArtikel', [ArtikelController::class, 'viewAll']);
Route::GET('/artikel-list', [ArtikelController::class, 'index']);
Route::get('/listArt', [ArtikelController::class, 'indexArt']);
Route::GET('/updateArtikel/{id}', [ArtikelController::class, 'editArtikel']);
Route::POST('/updateArtikel/{id}', [ArtikelController::class, 'updateArtikel']);
Route::GET('/deleteArtikel/{id}', [ArtikelController::class, 'deleteArtikel']);

//login
Route::GET('/', [LoginController::class, 'index']);
Route::POST('/login', [LoginController::class, 'login']);
Route::GET('/logout', [LoginController::class, 'logout']);
Route::GET('/session', [LoginController::class, 'session']);