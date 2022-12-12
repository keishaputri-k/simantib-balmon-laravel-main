<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MicrowaveLink extends Model
{
    use HasFactory;
    protected $table = "microwave_links";
    protected $fillable = [
        // 'id',
        'client_name',
        'curr_lic_num',
        'link_id',
        'tanggal',
        'metode',
        'no_risalah_hasil',
        'stn_name',
        'stasiun_lawan',
        'koor_long',
        'koor_lat',
        'tx_mhz',
        'rx_mhz',
        'bw_mhz',
        'merk_perangkat',
        'sertifikat',
        'status',
        'keterangan'
    ];
}
