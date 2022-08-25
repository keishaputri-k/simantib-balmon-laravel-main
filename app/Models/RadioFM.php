<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadioFM extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_stasiun_radio',
        'lokasi_pemancar',
        'frekuensi_terukur_mhz',
        'lokasi_pemancar_kecamatan',
        'kab_kota',
        'provinsi',
        'no_spt',
        'tanggal_spt',
        'kecamatan',
        'alamat',
        'latitude',
        'longitude'
    ];
}
