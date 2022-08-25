<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penertiban extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_observasi',
        'nama_pengguna',
        'frekuensi',
        'subservice',
        'dinas',
        'jenis_pelanggaran',
        'kab_kota',
        'tindakan',
        'status',
        'tgl_operasi_stasiun',
        'no_isr',
        'no_surat_penindakan',
        'tgl_penindakan',
        'keterangan'
    ];
}
