# Quick Start Guide - Admin Panel E-Counseling

## 🚀 Memulai Cepat

### Prasyarat
- PHP 8.0+
- Laravel 10+
- SQLite atau MySQL
- Composer

### Instalasi

1. **Clone atau Download Project**
   ```bash
   cd c:\backup\laragon\www\bimbingankonseling
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Migration**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Jalankan Server**
   ```bash
   php artisan serve
   ```

6. **Akses Aplikasi**
   - URL: `http://localhost:8000`
   - Login: `/login`

---

## 👤 Default Admin Account

Setelah menjalankan seeder, gunakan akun berikut untuk login:

```
Email: admin@example.com
Password: password
Role: Admin
```

---

## 📍 URL Admin Panel

| Halaman | URL | Deskripsi |
|---------|-----|-----------|
| Dashboard | `/admin/dashboard` | Dashboard utama admin |
| Data Siswa | `/admin/siswa` | Lihat daftar siswa |
| Tambah Siswa | `/admin/tambah-siswa` | Form tambah siswa |
| Edit Siswa | `/admin/edit-siswa/{id}` | Form edit siswa |
| Data Pengguna | `/admin/kelola-user` | Lihat daftar pengguna |
| Tambah Pengguna | `/admin/tambah-user` | Form tambah pengguna |
| Edit Pengguna | `/admin/edit-user/{id}` | Form edit pengguna |
| Data Konseling | `/admin/konseling` | Lihat daftar konseling |
| Data Pelanggaran | `/admin/pelanggaran` | Lihat daftar pelanggaran |
| Laporan | `/admin/laporan` | Laporan & statistik |
| Pengaturan | `/admin/pengaturan` | Pengaturan sistem |

---

## 🎯 Fitur Utama

### 1. Dashboard
- Statistik total data
- Grafik konseling per bulan
- Distribusi jenis pelanggaran

### 2. Manajemen Siswa
- Lihat semua siswa
- Tambah siswa baru
- Edit data siswa
- Hapus siswa

### 3. Manajemen Pengguna
- Lihat semua pengguna
- Tambah pengguna baru (Admin, Guru BK, Walikelas)
- Edit data pengguna
- Hapus pengguna

### 4. Data Konseling
- Lihat semua konseling
- Filter berdasarkan status

### 5. Data Pelanggaran
- Lihat semua pelanggaran
- Filter berdasarkan status
- Edit dan hapus pelanggaran

### 6. Laporan & Statistik
- Total pelanggaran
- Total konseling
- Pelanggaran bulan ini
- Konseling bulan ini
- Pelanggaran selesai
- Pelanggaran pending

### 7. Pengaturan Sistem
- Informasi server
- Status keamanan
- Tentang sistem

---

## 📝 Form Input

### Tambah/Edit Siswa
```
NIS (Nomor Induk Siswa) *
Nama Lengkap *
Kelas *
Jenis Kelamin * (Laki-laki / Perempuan)
Nomor Telepon
Alamat
```

### Tambah/Edit Pengguna
```
Nama Lengkap *
Email *
Role * (Admin / Guru BK / Walikelas)
Password * (Tambah) / Optional (Edit)
Konfirmasi Password
```

---

## 🔐 Keamanan

- Semua route dilindungi middleware `auth` dan `role:admin`
- CSRF protection pada semua form
- Password di-hash dengan bcrypt
- Input validation pada semua form
- Konfirmasi delete sebelum menghapus

---

## 🎨 Customization

### Mengubah Warna
Edit file `resources/views/Admin/dashboardadmin.blade.php` dan ubah color code:
- Primary Color: `#bd5d38` (Orange/Brown)
- Dark Background: `#1a1a1f`, `#2d1a10`

### Mengubah Logo
Ganti file di `public/berandautama/assets/img/logo1.png`

### Mengubah Font
Edit CSS di style tag pada setiap view

---

## 🐛 Troubleshooting

### Error: "Middleware not found"
```bash
php artisan make:middleware CheckRole
```

### Error: "Table not found"
```bash
php artisan migrate
```

### Error: "Class not found"
```bash
composer dump-autoload
```

### Error: "Permission denied"
Pastikan folder `storage` dan `bootstrap/cache` memiliki write permission:
```bash
chmod -R 775 storage bootstrap/cache
```

---

## 📚 Dokumentasi Lengkap

Lihat file `ADMIN_SYSTEM.md` untuk dokumentasi lengkap sistem admin panel.

---

## 🔄 Workflow Umum

### Menambah Siswa Baru
1. Login sebagai Admin
2. Klik "Data Siswa" di sidebar
3. Klik tombol "Tambah Siswa"
4. Isi form dengan data siswa
5. Klik "Simpan"
6. Siswa berhasil ditambahkan

### Menambah Pengguna Baru
1. Login sebagai Admin
2. Klik "Data Pengguna" → "Kelola Pengguna"
3. Klik tombol "Tambah Pengguna"
4. Isi form dengan data pengguna
5. Pilih role (Admin/Guru BK/Walikelas)
6. Klik "Simpan"
7. Pengguna berhasil ditambahkan

### Melihat Laporan
1. Login sebagai Admin
2. Klik "Laporan & Statistik" di sidebar
3. Lihat statistik dan laporan sistem

---

## 💡 Tips & Tricks

1. **Pagination:** Setiap halaman list menampilkan 10 item per halaman
2. **Search:** Gunakan browser search (Ctrl+F) untuk mencari di halaman
3. **Export:** Untuk export data, gunakan fitur print browser (Ctrl+P)
4. **Responsive:** Sidebar otomatis menyempit di mobile
5. **Logout:** Klik dropdown user di top-right untuk logout

---

## 📞 Support & Contact

Untuk bantuan lebih lanjut:
- Email: admin@sma12ambon.sch.id
- Telepon: (0911) XXXXXX
- Dokumentasi: Lihat file `ADMIN_SYSTEM.md`

---

**Selamat menggunakan Admin Panel E-Counseling!** 🎉
