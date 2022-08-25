<?php

namespace App\Http\Controllers;

use App\Models\Penyelenggara;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class ImportExcelController extends Controller
{
    function index()
    {
     $data = Penyelenggara::table('penyelenggaras')->orderBy('id', 'DESC')->get();
     return view('import_excel', compact('data'));
    }

    function import(Request $request)
    {
     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

     $path = $request->file('select_file')->getRealPath();

     $data = FacadesExcel::load($path)->get();

     if($data->count() > 0)
     {
      foreach($data->toArray() as $key => $value)
      {
       foreach($value as $row)
       {
        $insert_data[] = array(
         'Id'   => $row['id'],
         'CurrlicNum'   => $row['curr_lic_num'],
         'ClientId'   => $row['client_id'],
         'ApplicationId'    => $row['application_id'],
         'ClientName'  => $row['client_name'],
         'Freq'   => $row['freq'],
         'Subservice'   => $row['subservice'],
         'FreqPair'   => $row['freq_pair'],
         'Bwidht'   => $row['bwidht'],
         'Eqmdl'   => $row['eq_mdl'],
         'StnName'   => $row['stn_name'],
         'StnAddr'   => $row['stn_addr'],
         'Longitude'   => $row['longitude'],
         'Lantitude'   => $row['lantitude'],
         'City'   => $row['city'],
         'District'   => $row['district'],
         'Province'   => $row['province'],
         'LinkId'   => $row['link_id'],
         'StasiunLawan'   => $row['stasiun_lawan'],
         'CorrAddress'   => $row['corr_address'],
        );
       }
      }

      if(!empty($insert_data))
      {
       Penyelenggara::table('penyelenggaras')->insert($insert_data);
      }
     }
     return back()->with('success', 'Excel Data Imported successfully.');
    }
}
