<?php

namespace App\Http\Controllers;

use App\Models\RadioAM;
use Illuminate\Http\Request;

class RadioAMController extends Controller
{
    //function Read
    public function readRadioAM(){
        return RadioAM::all();
    }

    //function id Read
    public function readIdRadioAM($id){
        return RadioAM::findOrFail($id);
    }

    //function create
    public function createRadioAM(Request $request){
        $data = $request->all();
        try{
            $radioAM = new RadioAM();
            $radioAM -> nama_stasiun_radio = $data['nama_stasiun_radio'];
            $radioAM -> lokasi_pemancar = $data['lokasi_pemancar'];
            $radioAM -> frekuensi_terukur_mhz = $data['frekuensi_terukur_mhz'];
            $radioAM -> lokasi_pemancar_kecamatan = $data['lokasi_pemancar_kecamatan'];
            $radioAM -> kab_kota = $data['kab_kota'];
            $radioAM -> provinsi = $data['provinsi'];
            $radioAM -> no_spt = $data['no_spt'];
            $radioAM -> tanggal_spt = $data['tanggal_spt'];
            $radioAM -> kecamatan = $data['kecamatan'];
            $radioAM -> alamat = $data['alamat'];
            $radioAM -> latitude = $data['latitude'];
            $radioAM -> longitude = $data['longitude'];

            $radioAM -> save();
            $status = 'succes';
            return response()->json(compact('status', 'Radio AM'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //function update
    public function updateRadioAM($id, Request $request){
        $data = $request->all();
        try{
            $radioAM = RadioAM::findOrFail($id);
            $radioAM -> nama_stasiun_radio = $data['nama_stasiun_radio'];
            $radioAM -> lokasi_pemancar = $data['lokasi_pemancar'];
            $radioAM -> frekuensi_terukur_mhz = $data['frekuensi_terukur_mhz'];
            $radioAM -> lokasi_pemancar_kecamatan = $data['lokasi_pemancar_kecamatan'];
            $radioAM -> kab_kota = $data['kab_kota'];
            $radioAM -> provinsi = $data['provinsi'];
            $radioAM -> no_spt = $data['no_spt'];
            $radioAM -> tanggal_spt = $data['tanggal_spt'];
            $radioAM -> kecamatan = $data['kecamatan'];
            $radioAM -> alamat = $data['alamat'];
            $radioAM -> latitude = $data['latitude'];
            $radioAM -> longitude = $data['longitude'];

            $radioAM -> save();
            $status = 'succes';
            return response()->json(compact('status', 'Radio AM'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //delete function
    public function deleteRadioAM($id){
        $book = RadioAM::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
