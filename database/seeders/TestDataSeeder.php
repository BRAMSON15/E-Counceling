<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\Pelanggaran;
use App\Models\User;
use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create test students
        $siswas = [
            ['nis' => '001', 'nama' => 'Ahmad Rizki', 'kelas' => 'X-A', 'jenis_kelamin' => 'Laki-laki', 'no_telepon' => '081234567890', 'alamat' => 'Jl. Merdeka No. 1'],
            ['nis' => '002', 'nama' => 'Siti Nurhaliza', 'kelas' => 'X-A', 'jenis_kelamin' => 'Perempuan', 'no_telepon' => '081234567891', 'alamat' => 'Jl. Sudirman No. 2'],
            ['nis' => '003', 'nama' => 'Budi Santoso', 'kelas' => 'X-B', 'jenis_kelamin' => 'Laki-laki', 'no_telepon' => '081234567892', 'alamat' => 'Jl. Ahmad Yani No. 3'],
            ['nis' => '004', 'nama' => 'Dewi Lestari', 'kelas' => 'X-B', 'jenis_kelamin' => 'Perempuan', 'no_telepon' => '081234567893', 'alamat' => 'Jl. Gatot Subroto No. 4'],
            ['nis' => '005', 'nama' => 'Rudi Hermawan', 'kelas' => 'XI-A', 'jenis_kelamin' => 'Laki-laki', 'no_telepon' => '081234567894', 'alamat' => 'Jl. Diponegoro No. 5'],
        ];

        foreach ($siswas as $siswa) {
            Siswa::create($siswa);
        }

        // Get walikelas user
        $walikelas = User::where('role', 'walikelas')->first();

        // Create test violations
        $violations = [
            ['siswa_id' => 1, 'walikelas_id' => $walikelas->id, 'jenis_pelanggaran' => 'Terlambat', 'keterangan' => 'Terlambat masuk kelas 15 menit', 'tanggal_pelanggaran' => now()->subDays(5)->format('Y-m-d'), 'status' => 'pending'],
            ['siswa_id' => 2, 'walikelas_id' => $walikelas->id, 'jenis_pelanggaran' => 'Tidak Mengerjakan PR', 'keterangan' => 'Tidak mengerjakan PR Matematika', 'tanggal_pelanggaran' => now()->subDays(4)->format('Y-m-d'), 'status' => 'pending'],
            ['siswa_id' => 3, 'walikelas_id' => $walikelas->id, 'jenis_pelanggaran' => 'Berpakaian Tidak Rapi', 'keterangan' => 'Memakai seragam tidak sesuai aturan', 'tanggal_pelanggaran' => now()->subDays(3)->format('Y-m-d'), 'status' => 'pending'],
            ['siswa_id' => 4, 'walikelas_id' => $walikelas->id, 'jenis_pelanggaran' => 'Berbicara Kasar', 'keterangan' => 'Berbicara kasar kepada guru', 'tanggal_pelanggaran' => now()->subDays(2)->format('Y-m-d'), 'status' => 'pending'],
            ['siswa_id' => 5, 'walikelas_id' => $walikelas->id, 'jenis_pelanggaran' => 'Bolos Sekolah', 'keterangan' => 'Tidak hadir tanpa keterangan', 'tanggal_pelanggaran' => now()->subDays(1)->format('Y-m-d'), 'status' => 'pending'],
        ];

        foreach ($violations as $violation) {
            Pelanggaran::create($violation);
        }
    }
}
