<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvAnalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'curr_lic_num',
        'logo',
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
        'Program_penyelenggaraan_1',
        'program_standar_1',
        'Program_penyelenggaraan_2',
        'program_standar_2',
        'Program_penyelenggaraan_3',
        'program_standar_3',
        'Program_penyelenggaraan_4',
        'program_standar_4',
        'Program_penyelenggaraan_5',
        'program_standar_5',
        'Program_penyelenggaraan_6',
        'program_standar_6',
        'Program_penyelenggaraan_7',
        'program_standar_7',
        'Program_penyelenggaraan_8',
        'program_standar_8',
        'Program_penyelenggaraan_9',
        'program_standar_9',
        'Program_penyelenggaraan_10',
        'program_standar_10',
        'Program_penyelenggaraan_11',
        'program_standar_11',
        'Program_penyelenggaraan_12',
        'program_standar_12'
    ];
}
