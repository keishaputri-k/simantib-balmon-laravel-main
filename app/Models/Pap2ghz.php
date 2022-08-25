<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pap2ghz extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tanggal',
        'alamat_lokasi_perangkat_pemancar',
        'koor_perangkat_lantitude',
        'koor_perangkat_longitude',
        'frekuensi',
        'merk_perangkat',
        'pic_nama',
        'pic_no_tlp',
        'pic_email'
    ];
}
