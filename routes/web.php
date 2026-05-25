<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});

// Login routes
Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('Admin.dashboardadmin');
    })->name('admin.dashboard');
});

// Guru BK routes
Route::middleware(['auth', 'role:guru_bk'])->group(function () {
    Route::get('/guru-bk/dashboard', function () {
        return view('Guru BK.dashboard');
    })->name('guru_bk.dashboard');
});

// Walikelas routes
Route::middleware(['auth', 'role:walikelas'])->group(function () {
    Route::get('/walikelas/dashboard', function () {
        return view('Walikelas.dashboardwalkes');
    })->name('walikelas.dashboard');
    
    Route::get('/walikelas/laporan-pelanggaran', function () {
        return view('Walikelas.laporanpelanggaran');
    })->name('walikelas.laporan');
    
    Route::get('/walikelas/data-siswa', function () {
        return view('Walikelas.datasiswa');
    })->name('walikelas.datasiswa');
    
    Route::get('/walikelas/riwayat-laporan', function () {
        return view('Walikelas.riwayatlaporan');
    })->name('walikelas.riwayat');
});

Route::get('/Walikelas/login', function () {
    return view('Walikelas.login');
})->name('Walikelas.login');