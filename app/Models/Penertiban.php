<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penertiban extends Model
{
    use HasFactory;

    protected $fillable = [
        'curr_lis_num',
        'tgl_observasi',
        'frekuensi',
        'dinas',
        'jenis_pelanggaran',
        'kab_kota',
        'tindakan',
        'status',
        'tgl_operasi_stasiun',
        'no_surat_penindakan',
        'tgl_penindakan',
        'tgl_upload',
        'keterangan'
    ];
}
