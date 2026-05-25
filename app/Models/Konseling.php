<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    protected $fillable = [
        'pelanggaran_id',
        'guru_bk_id',
        'siswa_id',
        'tanggal_konseling',
        'hasil_konseling',
        'catatan',
        'status',
    ];

    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class);
    }

    public function guru_bk()
    {
        return $this->belongsTo(User::class, 'guru_bk_id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
