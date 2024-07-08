<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatadokterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::get('register', [LoginController::class, 'register']);
Route::post('actionRegister', [LoginController::class, 'actionRegister'])->name('actionRegister');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::resource('satuan', \App\Http\Controllers\SatuanController::class);
Route::resource('barang', \App\Http\Controllers\BarangController::class);
Route::resource('role', \App\Http\Controllers\RoleController::class);
Route::resource('datadokter', \App\Http\Controllers\DatadokterController::class);

