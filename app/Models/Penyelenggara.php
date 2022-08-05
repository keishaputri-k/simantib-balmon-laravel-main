<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyelenggara extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_penyelenggara',
        'nama_penyelenggara',
        'alamat_penyelenggara',
        'lantitude_penyelenggra',
        'longitude_penyelenggra',
        'frekuensi_penyelenggra',
        'bandwith_penyelenggra'
    ];
}
