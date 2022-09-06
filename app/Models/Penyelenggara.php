<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyelenggara extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'curr_lic_num',
        'client_id',
        'application_id',
        'client_name',
        'freq',
        'subservice',
        'freq_pair',
        'bwidht',
        'eq_mdl',
        'stn_name',
        'stn_addr',
        'longitude',
        'latitude',
        'stn_addr',
        'city',
        'district',
        'privince',
        'link_id',
        'stasiun_lawan',
        'corr_address',
    ];
}
