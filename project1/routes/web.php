<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;



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

// Route::get('/', function () {
//     return view('master');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jurusan/', [JurusanController::class, 'index']);
Route::get('/mahasiswa/', [MahasiswaController::class, 'index']);
Route::get('/jurusan/form/', [JurusanController::class, 'create']);
Route::post('/jurusan/store/', [JurusanController::class, 'store']);
Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit']);
Route::put('/jurusan/{id}', [JurusanController::class, 'update']);
Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy']);