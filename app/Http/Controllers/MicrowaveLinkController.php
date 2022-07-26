<?php

namespace App\Http\Controllers;

use App\Models\MicrowaveLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MicrowaveLinkController extends Controller
{
    //function Read
    public function readMicrowaveLink(){
        $ml = DB::table('microwave_links');
        return view('laravel-examples.microwave-link',[
            'mlList' => $ml 
            ->paginate(10)]
        );
    }
    public function readIdMicrowaveLink($id){
        return MicrowaveLink::findOrFail($id);
    }

    //create
    public function createMicrowaveLink(Request $request){
        $data = $request->all();
        try{
            $ml = new MicrowaveLink();
            $ml -> client_name = $data['client_name'];
            $ml -> curr_lic_num = $data['curr_lic_num'];
            $ml -> link_id = $data['link_id'];
            $ml -> tanggal = $data['tanggal'];
            $ml -> metode = $data['metode'];
            $ml -> no_risalah_hasil = $data['no_risalah_hasil'];
            $ml -> stn_name = $data['stn_name'];
            $ml -> stasiun_lawan = $data['stasiun_lawan'];
            $ml -> koor_long = $data['koor_long'];
            $ml -> koor_lat = $data['koor_lat'];
            $ml -> tx_mhz = $data['tx_mhz'];
            $ml -> rx_mhz = $data['rx_mhz'];
            $ml -> bw_mhz = $data['bw_mhz'];
            $ml -> merk_perangkat = $data['merk_perangkat'];
            $ml -> sertifikat = $data['sertifikat'];
            $ml -> status = $data['status'];
            $ml -> keterangan = $data['keterangan'];
        
            $ml -> save();
            $status = 'succes';
            return redirect('/microwave-link')->with('status','Data created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/microwave-link')->with('status','Data created Successfully');
        }
    }


    //function create
    public function updateMicrowaveLink($id, Request $request){
        $data = $request->all();
        try{
            $ml = MicrowaveLink::findOrFail($id);
            $ml -> client_name = $data['client_name'];
            $ml -> curr_lic_num = $data['curr_lic_num'];
            $ml -> link_id = $data['link_id'];
            $ml -> tanggal = $data['tanggal'];
            $ml -> metode = $data['metode'];
            $ml -> no_risalah_hasil = $data['no_risalah_hasil'];
            $ml -> stn_name = $data['stn_name'];
            $ml -> stasiun_lawan = $data['stasiun_lawan'];
            $ml -> koor_long = $data['koor_long'];
            $ml -> koor_lat = $data['koor_lat'];
            $ml -> tx_mhz = $data['tx_mhz'];
            $ml -> rx_mhz = $data['rx_mhz'];
            $ml -> bw_mhz = $data['bw_mhz'];
            $ml -> merk_perangkat = $data['merk_perangkat'];
            $ml -> sertifikat = $data['sertifikat'];
            $ml -> status = $data['status'];
            $ml -> keterangan = $data['keterangan'];

            $ml -> save();
            $status = 'succes';
            return redirect('/microwave-link')->with('status','Data created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/microwave-link')->with('status','Data created Successfully');
        }
    }
    
    //delete function
    public function deleteMicrowavelink($id){
        $ml = Microwavelink::findOrFail($id);
        $ml -> delete();

        $status = "delete status";
        return redirect('/microwave-link')->with('status','Data deleted Successfully');
    }
}
