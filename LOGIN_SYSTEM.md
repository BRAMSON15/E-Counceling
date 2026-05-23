# Sistem Login E-Counseling

## Deskripsi
Sistem login terpadu untuk 3 role: Admin, Guru BK, dan Walikelas. Setiap role akan diarahkan ke dashboard masing-masing setelah login berhasil.

## Fitur
- ✅ Form login unified (satu form untuk semua role)
- ✅ Validasi email dan password
- ✅ Role-based access control (RBAC)
- ✅ Redirect otomatis berdasarkan role
- ✅ Session management
- ✅ Logout functionality

## Akun Test

### Admin
- Email: `admin@example.com`
- Password: `password`
- Role: Admin

### Guru BK
- Email: `guru@example.com`
- Password: `password`
- Role: Guru BK

### Walikelas
- Email: `walikelas@example.com`
- Password: `password`
- Role: Walikelas

## Struktur File

### Controllers
- `app/Http/Controllers/loginController.php` - Menangani login, logout, dan redirect

### Middleware
- `app/Http/Middleware/CheckRole.php` - Middleware untuk validasi role

### Views
- `resources/views/login.blade.php` - Form login dengan design modern

### Database
- `database/migrations/2026_05_23_000003_add_role_to_users_table.php` - Migration untuk menambah field role
- `database/seeders/UserSeeder.php` - Seeder untuk membuat user test

### Routes
- `routes/web.php` - Route login dan dashboard untuk setiap role

## Cara Menggunakan

### 1. Login
Akses halaman login di `/login`

### 2. Masukkan Kredensial
- Masukkan email dan password
- Klik tombol "Masuk"

### 3. Redirect Otomatis
Setelah login berhasil, Anda akan diarahkan ke dashboard sesuai role:
- Admin → `/admin/dashboard`
- Guru BK → `/guru-bk/dashboard`
- Walikelas → `/walikelas/dashboard`

### 4. Logout
Klik tombol logout di dashboard untuk keluar dari sistem

## Menambah User Baru

Gunakan command artisan:
```bash
php artisan tinker
```

Kemudian:
```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'Nama User',
    'email' => 'email@example.com',
    'password' => Hash::make('password'),
    'role' => 'admin', // atau 'guru_bk', 'walikelas'
]);
```

## Keamanan

- Password di-hash menggunakan bcrypt
- CSRF protection aktif
- Session regeneration setelah login
- Role-based middleware untuk proteksi route

## Customization

### Mengubah Role
Edit file `database/migrations/2026_05_23_000003_add_role_to_users_table.php` dan ubah enum values.

### Mengubah Redirect
Edit method `login()` di `app/Http/Controllers/loginController.php` untuk mengubah redirect URL.

### Styling
Edit file `resources/views/login.blade.php` untuk mengubah design form login.
