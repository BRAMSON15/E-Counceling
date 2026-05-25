<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use App\Models\Konseling;
use App\Models\Siswa;
use Illuminate\Http\Request;

class GuruBKController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $totalKonseling = Konseling::where('guru_bk_id', auth()->id())->count();
        $konselingBulanIni = Konseling::where('guru_bk_id', auth()->id())
            ->whereMonth('created_at', now()->month)
            ->count();
        $siswaDikonseling = Konseling::where('guru_bk_id', auth()->id())
            ->distinct('siswa_id')
            ->count('siswa_id');

        return view('Guru BK.dashboard', compact('totalKonseling', 'konselingBulanIni', 'siswaDikonseling'));
    }

    // Data Pelanggaran
    public function dataPelanggaran()
    {
        $pelanggaran = Pelanggaran::with('siswa', 'walikelas')
            ->where('status', '!=', 'selesai')
            ->latest()
            ->paginate(10);

        return view('Guru BK.datapelanggaran', compact('pelanggaran'));
    }

    // Hasil Konseling - List
    public function hasilKonselingIndex()
    {
        $konseling = Konseling::where('guru_bk_id', auth()->id())
            ->with('siswa', 'pelanggaran')
            ->latest()
            ->paginate(10);

        return view('Guru BK.hasilkonseling', compact('konseling'));
    }

    // Hasil Konseling - Create
    public function hasilKonselingCreate($pelanggaran_id)
    {
        $pelanggaran = Pelanggaran::findOrFail($pelanggaran_id);

        return view('Guru BK.hasilkonseling-create', compact('pelanggaran'));
    }

    // Hasil Konseling - Store
    public function hasilKonselingStore(Request $request)
    {
        $validated = $request->validate([
            'pelanggaran_id' => 'required|exists:pelanggarans,id',
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal_konseling' => 'required|date',
            'hasil_konseling' => 'nullable|string',
            'catatan' => 'nullable|string',
        ]);

        $validated['guru_bk_id'] = auth()->id();
        $validated['status'] = 'selesai';

        Konseling::create($validated);

        // Update status pelanggaran
        Pelanggaran::find($validated['pelanggaran_id'])->update(['status' => 'selesai']);

        return redirect()->route('guru_bk.hasilkonseling')->with('success', 'Hasil konseling berhasil disimpan');
    }

    // Data Siswa
    public function dataSiswa()
    {
        $siswa = Siswa::paginate(10);

        return view('Guru BK.datasiswa', compact('siswa'));
    }

    // Statistik Konseling
    public function statistik()
    {
        $totalKonseling = Konseling::where('guru_bk_id', auth()->id())->count();
        $konselingBulanIni = Konseling::where('guru_bk_id', auth()->id())
            ->whereMonth('created_at', now()->month)
            ->count();
        $siswaDikonseling = Konseling::where('guru_bk_id', auth()->id())
            ->distinct('siswa_id')
            ->count('siswa_id');

        return view('Guru BK.statistikkonseling', compact('totalKonseling', 'konselingBulanIni', 'siswaDikonseling'));
    }
}
