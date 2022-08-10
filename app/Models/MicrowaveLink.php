<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MicrowaveLink extends Model
{
    use HasFactory;

    protected $fillable = [
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

    //delete function
    public function deleteMicrowavelink($id){
        $book = Microwavelink::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
