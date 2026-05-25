<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class WalkesController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $totalLaporan = Pelanggaran::where('walikelas_id', auth()->id())->count();
        $laporanBulanIni = Pelanggaran::where('walikelas_id', auth()->id())
            ->whereMonth('created_at', now()->month)
            ->count();
        $jumlahSiswa = Siswa::count();

        return view('Walikelas.dashboardwalkes', compact('totalLaporan', 'laporanBulanIni', 'jumlahSiswa'));
    }

    // Laporan Pelanggaran - List
    public function laporanIndex()
    {
        $laporan = Pelanggaran::where('walikelas_id', auth()->id())
            ->with('siswa')
            ->latest()
            ->paginate(10);
        
        $siswas = Siswa::all();

        return view('Walikelas.laporanpelanggaran', compact('laporan', 'siswas'));
    }

    // Laporan Pelanggaran - Form
    public function laporanForm()
    {
        $siswas = Siswa::all();
        return view('Walikelas.form-laporan', compact('siswas'));
    }

    // Laporan Pelanggaran - Store
    public function laporanStore(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'jenis_pelanggaran' => 'required|string',
            'keterangan' => 'nullable|string',
            'tanggal_pelanggaran' => 'required|date',
        ]);

        $validated['walikelas_id'] = auth()->id();

        Pelanggaran::create($validated);

        return redirect()->route('walikelas.laporan')->with('success', 'Laporan pelanggaran berhasil dibuat');
    }

    // Data Siswa
    public function dataSiswa()
    {
        $siswa = Siswa::paginate(10);

        return view('Walikelas.datasiswa', compact('siswa'));
    }

    // Tambah Siswa - Form
    public function tambahSiswaForm()
    {
        return view('Walikelas.tambah-siswa');
    }

    // Tambah Siswa - Store
    public function tambahSiswa(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|string|unique:siswas,nis',
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_telepon' => 'nullable|string',
            'alamat' => 'nullable|string',
        ]);

        Siswa::create($validated);

        return redirect()->route('walikelas.datasiswa')->with('success', 'Siswa berhasil ditambahkan');
    }

    // Riwayat Laporan
    public function riwayatLaporan()
    {
        $riwayat = Pelanggaran::where('walikelas_id', auth()->id())
            ->with('siswa')
            ->latest()
            ->paginate(10);

        return view('Walikelas.riwayatlaporan', compact('riwayat'));
    }
}
