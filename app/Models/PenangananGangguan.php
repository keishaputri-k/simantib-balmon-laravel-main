<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenangananGangguan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'upt',
        'no_isr',
        'no_surat_pengaduan',
        'tgl_surat_pengaduan',
        'tgl_terima_surat_pengaduan',
        'tgl_spt_pengukuran_karasteristik_frekuensi_radio',
        'uraian_kasus',
        'frekuensi_terganggu',
        'pihak_terganggu',
        'pihak_pengganggu',
        'latitude_pengganggu',
        'longitude_pengganggu',
        'latitude_terganggu',
        'longitude_terganggu',
        'keterangan',
        'tanggal_selesai_aduan',
        'status'
    ];
}
