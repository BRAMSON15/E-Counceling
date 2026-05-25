<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Pelanggaran;
use App\Models\Konseling;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $totalUser = User::count();
        $totalSiswa = Siswa::count();
        $totalPelanggaran = Pelanggaran::count();
        $totalKonseling = Konseling::count();

        return view('Admin.dashboardadmin', compact('totalUser', 'totalSiswa', 'totalPelanggaran', 'totalKonseling'));
    }

    // ===== DATA KONSELING =====
    public function konseling()
    {
        $konseling = Konseling::with('siswa', 'guru_bk', 'pelanggaran')
            ->latest()
            ->paginate(10);

        return view('Admin.konseling', compact('konseling'));
    }

    // ===== DATA PELANGGARAN =====
    public function pelanggaran()
    {
        $pelanggaran = Pelanggaran::with('siswa', 'walikelas')
            ->latest()
            ->paginate(10);

        return view('Admin.pelanggaran', compact('pelanggaran'));
    }

    // ===== DATA PENGGUNA =====
    public function kelolaUser()
    {
        $users = User::paginate(10);

        return view('Admin.menu.kelolauser', compact('users'));
    }

    // Form Tambah User
    public function tambahUserForm()
    {
        return view('Admin.menu.tambah-user');
    }

    // Tambah User
    public function tambahUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:admin,guru_bk,walikelas',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('admin.kelolauser')->with('success', 'User berhasil ditambahkan');
    }

    // Edit User
    public function editUser($id)
    {
        $user = User::findOrFail($id);

        return view('Admin.menu.edit-user', compact('user'));
    }

    // Update User
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,guru_bk,walikelas',
        ]);

        $user->update($validated);

        return redirect()->route('admin.kelolauser')->with('success', 'User berhasil diperbarui');
    }

    // Hapus User
    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('admin.kelolauser')->with('success', 'User berhasil dihapus');
    }

    // ===== DATA SISWA =====
    public function siswa()
    {
        $siswa = Siswa::paginate(10);

        return view('Admin.siswa', compact('siswa'));
    }

    // Form Tambah Siswa
    public function tambahSiswaForm()
    {
        return view('Admin.menu.tambah-siswa');
    }

    // Tambah Siswa
    public function tambahSiswa(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|unique:siswas',
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_telepon' => 'nullable|string',
            'alamat' => 'nullable|string',
        ]);

        Siswa::create($validated);

        return redirect()->route('admin.siswa')->with('success', 'Siswa berhasil ditambahkan');
    }

    // Edit Siswa
    public function editSiswa($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('Admin.menu.edit-siswa', compact('siswa'));
    }

    // Update Siswa
    public function updateSiswa(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $validated = $request->validate([
            'nis' => 'required|unique:siswas,nis,' . $id,
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_telepon' => 'nullable|string',
            'alamat' => 'nullable|string',
        ]);

        $siswa->update($validated);

        return redirect()->route('admin.siswa')->with('success', 'Siswa berhasil diperbarui');
    }

    // Hapus Siswa
    public function deleteSiswa($id)
    {
        Siswa::findOrFail($id)->delete();

        return redirect()->route('admin.siswa')->with('success', 'Siswa berhasil dihapus');
    }

    // ===== LAPORAN & STATISTIK =====
    public function laporan()
    {
        $totalPelanggaran = Pelanggaran::count();
        $totalKonseling = Konseling::count();
        $pelangaranBulanIni = Pelanggaran::whereMonth('created_at', now()->month)->count();
        $konselingBulanIni = Konseling::whereMonth('created_at', now()->month)->count();
        $pelangaranSelesai = Pelanggaran::where('status', 'selesai')->count();
        $pelangaranPending = Pelanggaran::where('status', 'pending')->count();

        return view('Admin.laporan', compact(
            'totalPelanggaran',
            'totalKonseling',
            'pelangaranBulanIni',
            'konselingBulanIni',
            'pelangaranSelesai',
            'pelangaranPending'
        ));
    }

    // ===== PENGATURAN SISTEM =====
    public function pengaturan()
    {
        return view('Admin.pengaturan');
    }

    // ===== HELPER METHODS =====
    private function getStatistics()
    {
        return [
            'totalUser' => User::count(),
            'totalSiswa' => Siswa::count(),
            'totalPelanggaran' => Pelanggaran::count(),
            'totalKonseling' => Konseling::count(),
        ];
    }
}
