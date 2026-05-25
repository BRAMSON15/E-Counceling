# Dokumentasi Sistem Admin E-Counseling

## Ringkasan Sistem
Sistem E-Counseling SMA NEGERI 12 AMBON adalah platform digital untuk manajemen konseling dan pelanggaran siswa. Sistem ini memiliki tiga role utama: Admin, Guru BK, dan Walikelas.

## Fitur Admin

### 1. Dashboard Admin
**Route:** `/admin/dashboard`
**File:** `resources/views/Admin/dashboardadmin.blade.php`

Dashboard menampilkan:
- Total Konseling
- Total Siswa
- Total Pelanggaran
- Total Pengguna
- Grafik Konseling Per Bulan
- Distribusi Jenis Pelanggaran

### 2. Data Konseling
**Route:** `/admin/konseling`
**File:** `resources/views/Admin/konseling.blade.php`

Fitur:
- Menampilkan daftar semua konseling
- Informasi: Nama Siswa, Guru BK, Tanggal Konseling, Status
- Pagination (10 item per halaman)
- Link ke detail konseling

### 3. Data Pelanggaran
**Route:** `/admin/pelanggaran`
**File:** `resources/views/Admin/pelanggaran.blade.php`

Fitur:
- Menampilkan daftar semua pelanggaran siswa
- Informasi: Nama Siswa, NIS, Jenis Pelanggaran, Tanggal, Status
- Status: Pending, Proses, Selesai
- Pagination (10 item per halaman)
- Tombol Edit dan Hapus

### 4. Data Siswa
**Route:** `/admin/siswa`
**File:** `resources/views/Admin/siswa.blade.php`

Fitur:
- Menampilkan daftar semua siswa
- Informasi: NIS, Nama, Kelas, Jenis Kelamin
- Tombol Tambah Siswa
- Tombol Edit dan Hapus per siswa
- Pagination (10 item per halaman)

#### 4.1 Tambah Siswa
**Route:** `/admin/tambah-siswa` (GET & POST)
**File:** `resources/views/Admin/menu/tambah-siswa.blade.php`

Form Input:
- NIS (Nomor Induk Siswa) - Required, Unique
- Nama Lengkap - Required
- Kelas - Required
- Jenis Kelamin - Required (Laki-laki/Perempuan)
- Nomor Telepon - Optional
- Alamat - Optional

#### 4.2 Edit Siswa
**Route:** `/admin/edit-siswa/{id}` (GET)
**Route:** `/admin/update-siswa/{id}` (PUT)
**File:** `resources/views/Admin/menu/edit-siswa.blade.php`

Form Input: Sama seperti Tambah Siswa

### 5. Data Pengguna
**Route:** `/admin/kelola-user`
**File:** `resources/views/Admin/menu/kelolauser.blade.php`

Fitur:
- Menampilkan daftar semua pengguna
- Informasi: Nama, Email, Role, Tanggal Terdaftar
- Role Badge: Admin (Red), Guru BK (Blue), Walikelas (Cyan)
- Tombol Tambah Pengguna
- Tombol Edit dan Hapus per pengguna
- Pagination (10 item per halaman)

#### 5.1 Tambah Pengguna
**Route:** `/admin/tambah-user` (GET & POST)
**File:** `resources/views/Admin/menu/tambah-user.blade.php`

Form Input:
- Nama Lengkap - Required
- Email - Required, Unique
- Role - Required (Admin, Guru BK, Walikelas)
- Password - Required, Min 6 karakter
- Konfirmasi Password - Required

#### 5.2 Edit Pengguna
**Route:** `/admin/edit-user/{id}` (GET)
**Route:** `/admin/update-user/{id}` (PUT)
**File:** `resources/views/Admin/menu/edit-user.blade.php`

Form Input:
- Nama Lengkap - Required
- Email - Required, Unique
- Role - Required
- Password - Optional (kosongkan jika tidak ingin mengubah)
- Konfirmasi Password - Optional

### 6. Laporan & Statistik
**Route:** `/admin/laporan`
**File:** `resources/views/Admin/laporan.blade.php`

Menampilkan:
- Total Pelanggaran
- Total Konseling
- Pelanggaran Bulan Ini
- Konseling Bulan Ini
- Pelanggaran Selesai
- Pelanggaran Pending

### 7. Pengaturan Sistem
**Route:** `/admin/pengaturan`
**File:** `resources/views/Admin/pengaturan.blade.php`

Menampilkan:
- Informasi Server (Nama Aplikasi, Versi, Framework, PHP Version, Database, Environment)
- Status Keamanan (Enkripsi, Autentikasi, Middleware)
- Tentang Sistem (Deskripsi, Fitur Utama, Kontak Support)

## Controller
**File:** `app/Http/Controllers/AdminController.php`

Methods:
- `dashboard()` - Menampilkan dashboard
- `konseling()` - Menampilkan data konseling
- `pelanggaran()` - Menampilkan data pelanggaran
- `siswa()` - Menampilkan data siswa
- `tambahSiswaForm()` - Form tambah siswa
- `tambahSiswa()` - Proses tambah siswa
- `editSiswa()` - Form edit siswa
- `updateSiswa()` - Proses update siswa
- `deleteSiswa()` - Proses hapus siswa
- `kelolaUser()` - Menampilkan data pengguna
- `tambahUserForm()` - Form tambah pengguna
- `tambahUser()` - Proses tambah pengguna
- `editUser()` - Form edit pengguna
- `updateUser()` - Proses update pengguna
- `deleteUser()` - Proses hapus pengguna
- `laporan()` - Menampilkan laporan & statistik
- `pengaturan()` - Menampilkan pengaturan sistem

## Models
- `User` - Model pengguna
- `Siswa` - Model siswa
- `Pelanggaran` - Model pelanggaran
- `Konseling` - Model konseling

## Routes
Semua route admin dilindungi dengan middleware `auth` dan `role:admin`:

```php
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Data Konseling
    Route::get('/admin/konseling', [AdminController::class, 'konseling'])->name('admin.konseling');
    
    // Data Pelanggaran
    Route::get('/admin/pelanggaran', [AdminController::class, 'pelanggaran'])->name('admin.pelanggaran');
    
    // Data Pengguna
    Route::get('/admin/kelola-user', [AdminController::class, 'kelolaUser'])->name('admin.kelolauser');
    Route::get('/admin/tambah-user', [AdminController::class, 'tambahUserForm'])->name('admin.tambahuser.form');
    Route::post('/admin/tambah-user', [AdminController::class, 'tambahUser'])->name('admin.tambahuser');
    Route::get('/admin/edit-user/{id}', [AdminController::class, 'editUser'])->name('admin.edituser');
    Route::put('/admin/update-user/{id}', [AdminController::class, 'updateUser'])->name('admin.updateuser');
    Route::delete('/admin/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteuser');
    
    // Data Siswa
    Route::get('/admin/siswa', [AdminController::class, 'siswa'])->name('admin.siswa');
    Route::get('/admin/tambah-siswa', [AdminController::class, 'tambahSiswaForm'])->name('admin.tambahsiswa.form');
    Route::post('/admin/tambah-siswa', [AdminController::class, 'tambahSiswa'])->name('admin.tambahsiswa');
    Route::get('/admin/edit-siswa/{id}', [AdminController::class, 'editSiswa'])->name('admin.editsiswa');
    Route::put('/admin/update-siswa/{id}', [AdminController::class, 'updateSiswa'])->name('admin.updatesiswa');
    Route::delete('/admin/delete-siswa/{id}', [AdminController::class, 'deleteSiswa'])->name('admin.deletesiswa');
    
    // Laporan & Statistik
    Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
    
    // Pengaturan Sistem
    Route::get('/admin/pengaturan', [AdminController::class, 'pengaturan'])->name('admin.pengaturan');
});
```

## Styling & Design
- **Color Scheme:** Brown/Orange (#bd5d38) dengan Dark Background
- **Framework:** Bootstrap 5.2.3
- **Font:** Saira Extra Condensed (Headers), Muli (Body)
- **Icons:** Font Awesome 6.3.0
- **Responsive:** Mobile-friendly dengan sidebar yang dapat di-toggle

## Fitur Keamanan
- Middleware `auth` untuk autentikasi
- Middleware `role:admin` untuk otorisasi
- CSRF Protection pada semua form
- Password hashing dengan bcrypt
- Validasi input pada semua form

## Database
Menggunakan SQLite dengan tabel:
- `users` - Data pengguna
- `siswas` - Data siswa
- `pelanggarans` - Data pelanggaran
- `konselings` - Data konseling

## Catatan Pengembangan
- Semua view menggunakan Blade Template Engine
- Pagination default 10 item per halaman
- Semua form memiliki validasi error handling
- Success message ditampilkan setelah operasi berhasil
- Konfirmasi delete sebelum menghapus data
