<?php

namespace App\Imports;

use App\Models\Penyelenggara;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class PenyelenggaraImport implements ToModel
{
    /**
    * @param array $row
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penyelenggara([
            'CurrlicNum' => $row[1],
            'ClientId' => $row[2], 
            'ApplicationId' => $row[3], 
            'ClientName' => $row[4], 
            'Freq' => $row[5], 
            'Subservice' => $row[6], 
            'FreqPair' => $row[7], 
            'Bwidht' => $row[8], 
            'Eqmdl' => $row[9], 
            'StnName' => $row[10], 
            'StnAddr' => $row[11], 
            'Longitude' => $row[12], 
            'Lantitude' => $row[13], 
            'City' => $row[14], 
            'District' => $row[15], 
            'Province' => $row[16],
            'LinkId' => $row[17],
            'StasiunLawan' => $row[18],
            'CorrAddress' => $row[19],
        ]);
    }
}
