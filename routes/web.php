<?php

use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai',[PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/tambah',[PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai',[PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{pegawai}/edit',[PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/{pegawai}/update',[PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{pegawai}/delete',[PegawaiController::class, 'delete'])->name('pegawai.delete');

