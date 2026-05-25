<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\WalkesController;
use App\Http\Controllers\GuruBKController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Login routes
Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/kelola-user', [AdminController::class, 'kelolaUser'])->name('admin.kelolauser');
    Route::post('/admin/tambah-user', [AdminController::class, 'tambahUser'])->name('admin.tambahuser');
    Route::get('/admin/edit-user/{id}', [AdminController::class, 'editUser'])->name('admin.edituser');
    Route::put('/admin/update-user/{id}', [AdminController::class, 'updateUser'])->name('admin.updateuser');
    Route::delete('/admin/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteuser');
});

// Guru BK routes
Route::middleware(['auth', 'role:guru_bk'])->group(function () {
    Route::get('/guru-bk/dashboard', [GuruBKController::class, 'dashboard'])->name('guru_bk.dashboard');
    Route::get('/guru-bk/data-pelanggaran', [GuruBKController::class, 'dataPelanggaran'])->name('guru_bk.datapelanggaran');
    Route::get('/guru-bk/hasil-konseling', [GuruBKController::class, 'hasilKonselingIndex'])->name('guru_bk.hasilkonseling');
    Route::get('/guru-bk/hasil-konseling/create/{pelanggaran_id}', [GuruBKController::class, 'hasilKonselingCreate'])->name('guru_bk.hasilkonseling.create');
    Route::post('/guru-bk/hasil-konseling', [GuruBKController::class, 'hasilKonselingStore'])->name('guru_bk.hasilkonseling.store');
    Route::get('/guru-bk/data-siswa', [GuruBKController::class, 'dataSiswa'])->name('guru_bk.datasiswa');
    Route::get('/guru-bk/statistik-konseling', [GuruBKController::class, 'statistik'])->name('guru_bk.statistik');
});

// Walikelas routes
Route::middleware(['auth', 'role:walikelas'])->group(function () {
    Route::get('/walikelas/dashboard', [WalkesController::class, 'dashboard'])->name('walikelas.dashboard');
    Route::get('/walikelas/laporan-pelanggaran', [WalkesController::class, 'laporanIndex'])->name('walikelas.laporan');
    Route::post('/walikelas/laporan-pelanggaran', [WalkesController::class, 'laporanStore'])->name('walikelas.laporan.store');
    Route::get('/walikelas/data-siswa', [WalkesController::class, 'dataSiswa'])->name('walikelas.datasiswa');
    Route::get('/walikelas/riwayat-laporan', [WalkesController::class, 'riwayatLaporan'])->name('walikelas.riwayat');
});

Route::get('/Walikelas/login', function () {
    return view('Walikelas.login');
})->name('Walikelas.login');