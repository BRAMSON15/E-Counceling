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

    // Kelola User
    public function kelolaUser()
    {
        $users = User::paginate(10);

        return view('Admin.menu.kelolauser', compact('users'));
    }

    // Tambah User
    public function tambahUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
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
            'name' => 'required|string',
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
}
