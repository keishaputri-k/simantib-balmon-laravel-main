<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvAnalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'curr_lic_num',
        'alamat',
        'no_spt',
        'tanggal_pelaksanaan',
        'penyelenggara_layanan',
        'kanal',
        'status',
        'frekuensi',
        'level',
        'bandwidth',
        'code_rate',
        'guard_interval',
        'program_penyelenggaraan_1',
        'program_standar_1',
        'program_penyelenggaraan_2',
        'program_standar_2',
        'program_penyelenggaraan_3',
        'program_standar_3',
        'program_penyelenggaraan_4',
        'program_standar_4',
        'program_penyelenggaraan_5',
        'program_standar_5',
        'program_penyelenggaraan_6',
        'program_standar_6',
        'program_penyelenggaraan_7',
        'program_standar_7',
        'program_penyelenggaraan_8',
        'program_standar_8',
        'program_penyelenggaraan_9',
        'program_standar_9',
        'program_penyelenggaraan_10',
        'program_standar_10',
        'program_penyelenggaraan_11',
        'program_standar_11',
        'program_penyelenggaraan_12',
        'program_standar_12'
    ];
}
