<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jenis_kelamin',
        'no_telepon',
        'alamat',
    ];

    public function pelanggarans()
    {
        return $this->hasMany(Pelanggaran::class);
    }

    public function konselings()
    {
        return $this->hasMany(Konseling::class);
    }
}
