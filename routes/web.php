<?php

use App\Http\Controllers\mobilController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\penyewaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//mobil
Route::get('/mobil/', [mobilController::class, 'index']);
Route::get('/mobil/delete/{id}', [mobilController::class, 'destroy']);
Route::get('/mobil/add', [mobilController::class, 'create']);
Route::post('/mobil/add', [mobilController::class, 'store']);
Route::get('/mobil/edit/{id}', [mobilController::class, 'edit']);
Route::post('/mobil/edit/{id}', [mobilController::class, 'update']);

//pelanggan
Route::get('/pelanggan/', [pelangganController::class, 'index']);
Route::get('/pelanggan/delete/{id}', [pelangganController::class, 'destroy']);
Route::get('/pelanggan/add', [pelangganController::class, 'create']);
Route::post('/pelanggan/add', [pelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [pelangganController::class, 'edit']);
Route::post('/pelanggan/edit/{id}', [pelangganController::class, 'update']);

//penyewaan
Route::get('/penyewaan/', [penyewaanController::class, 'index']);
Route::get('/penyewaan/delete/{id}', [penyewaanController::class, 'destroy']);
Route::get('/penyewaan/add', [penyewaanController::class, 'create']);
Route::post('/penyewaan/add', [penyewaanController::class, 'store']);
Route::get('/penyewaan/edit/{id}', [penyewaanController::class, 'edit']);
Route::post('/penyewaan/edit/{id}', [penyewaanController::class, 'update']);