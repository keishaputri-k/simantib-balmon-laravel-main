<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel as ExcelExcel;
use App\Imports\MicrowaveLinkImport as ImportsMicrowaveLinkImport;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function uploadMl()
    {

        Excel::import(new ImportsMicrowaveLinkImport, request()->file('fileMicrowaveLink'));
        config(['excel.import.startRow' => 2]);

        return redirect()->route('microwave-link-admin')->with('success', 'File Imported Successfully');
    }
}
