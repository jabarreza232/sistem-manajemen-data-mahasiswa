<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login_proccess');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa_create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa_store');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa_edit');
Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa_update');
Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa_delete');
