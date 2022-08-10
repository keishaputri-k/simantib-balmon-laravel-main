<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RHOPF extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_stasium_monitor',
        'tanggal',
        'waktu',
        'band',
        'pita_frekuensi',
        'frekuensi_mhz',
        'dinas',
        'sub_servis',
        'kelas_emisi',
        'kelas_stasiun',
        'azimuth',
        'level_dbz_m',
        'identifikasi',
        'legalitas',
        'provinsi',
        'kabupaten',
        'no_spt',
        'tgl_spt',
        'kecamatan',
        'jalan_lokasi',
        'latitude',
        'longitude'
    ];
}
