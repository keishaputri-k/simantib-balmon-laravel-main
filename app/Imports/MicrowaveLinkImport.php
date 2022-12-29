<?php

namespace App\Imports;

use App\Models\MicrowaveLink;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;


class MicrowaveLinkImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    public function model(array $row)
    {
        
        return new MicrowaveLink([
            "id" => $row[0] ,
            "client_name" => $row[1] ?? 'none' ,
            "curr_lic_num" => $row[2] ?? null,
            "link_id" => $row[3] ?? null,
            "tanggal" => $row[4] ?? null,
            "metode" => $row[5] ?? null,
            "no_risalah_hasil" => $row[6] ?? null,
            "stn_name" => $row[7] ?? null,
            "stasiun_lawan" => $row[8] ?? null,
            "koor_long" => $row[9] ?? null,
            "koor_lat" => $row[10] ?? null,
            "tx_mhz" => $row[11] ?? null,
            "rx_mhz" => $row[12] ?? null,
            "bw_mhz" => $row[13] ?? null,
            "merk_perangkat" => $row[14] ?? null,
            "sertifikat" => $row[15] ?? null,
            "status" => $row[16] ?? null,
            "keterangan" => $row[17] ?? null
            
        ]);
        // return dd($row);
    }
}
