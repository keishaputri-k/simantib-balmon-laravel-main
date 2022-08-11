<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'nip_pegawai',
        'nama_pegawai',
        'level_pegawai',
        'password_pegawai',
    ];

    
    protected $hidden = [
        'password',
    ];
}
