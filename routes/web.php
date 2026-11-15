<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\Kms\KodifikasiController;
use App\Http\Controllers\Kms\PersonalisasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 1. Company Profile (publik)
|--------------------------------------------------------------------------
*/
Route::get('/', [CompanyProfileController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Autentikasi (placeholder)
|--------------------------------------------------------------------------
| Nanti diganti dengan autentikasi sungguhan (mis. Laravel Breeze) dan
| rute KMS di bawah dibungkus middleware 'auth'.
*/
Route::view('/login', 'auth.login')->name('login');

/*
|--------------------------------------------------------------------------
| 2. KMS Strategi Kodifikasi  — prefix /kms-kodifikasi, nama kms.kodifikasi.*
|--------------------------------------------------------------------------
*/
Route::prefix('kms-kodifikasi')->name('kms.kodifikasi')->group(function () {
    Route::get('/', [KodifikasiController::class, 'index']);
    // ->name('.sop.index'), '.artikel.*', '.glosarium.*' ditambahkan di tahap berikutnya
});

/*
|--------------------------------------------------------------------------
| 3. KMS Strategi Personalisasi — prefix /kms-personalisasi, nama kms.personalisasi.*
|--------------------------------------------------------------------------
*/
Route::prefix('kms-personalisasi')->name('kms.personalisasi')->group(function () {
    Route::get('/', [PersonalisasiController::class, 'index']);
    // ->name('.tugas.*'), '.kanban', '.diskusi.*' ditambahkan di tahap berikutnya
});
