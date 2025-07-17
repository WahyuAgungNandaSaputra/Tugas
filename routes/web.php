<?php

use App\Http\Controllers\unhController;

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

Route::get('/mhs', [unhController::class, 'mhs'])->name("mhs");

Route::get('/dosen', [unhController::class, 'dosen'])->name("dosen");

Route::get('/', [unhController::class, 'home'])->name("home");

