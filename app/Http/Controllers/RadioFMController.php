<?php

namespace App\Http\Controllers;

use App\Models\RadioFM;
use Illuminate\Http\Request;

class RadioFMController extends Controller
{
    //function Read
    public function readRadioFM(){
        return RadioFM::all();
    }

    //function Read id
    public function readIdRadioFM($id){
        return RadioFM::findOrFail($id);
    }

    //function create
    public function createRadioFM(Request $request){
        $data = $request->all();
        try{
            $radioFM = new RadioFM();
            $radioFM -> nama_stasiun_radio = $data['nama_stasiun_radio'];
            $radioFM -> lokasi_pemancar = $data['lokasi_pemancar'];
            $radioFM -> frekuensi_terukur_mhz = $data['frekuensi_terukur_mhz'];
            $radioFM -> lokasi_pemancar_kecamatan = $data['lokasi_pemancar_kecamatan'];
            $radioFM -> kab_kota = $data['kab_kota'];
            $radioFM -> provinsi = $data['provinsi'];
            $radioFM -> no_spt = $data['no_spt'];
            $radioFM -> tanggal_spt = $data['tanggal_spt'];
            $radioFM -> kecamatan = $data['kecamatan'];
            $radioFM -> alamat = $data['alamat'];
            $radioFM -> latitude = $data['latitude'];
            $radioFM -> longitude = $data['longitude'];

            $radioFM -> save();
            $status = 'succes';
            return response()->json(compact('status', 'Radio FM'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //function update
    public function updateRadioFM($id, Request $request){
        $data = $request->all();
        try{
            $radioFM = RadioFM::findOrFail($id);
            $radioFM -> nama_stasiun_radio = $data['nama_stasiun_radio'];
            $radioFM -> lokasi_pemancar = $data['lokasi_pemancar'];
            $radioFM -> frekuensi_terukur_mhz = $data['frekuensi_terukur_mhz'];
            $radioFM -> lokasi_pemancar_kecamatan = $data['lokasi_pemancar_kecamatan'];
            $radioFM -> kab_kota = $data['kab_kota'];
            $radioFM -> provinsi = $data['provinsi'];
            $radioFM -> no_spt = $data['no_spt'];
            $radioFM -> tanggal_spt = $data['tanggal_spt'];
            $radioFM -> kecamatan = $data['kecamatan'];
            $radioFM -> alamat = $data['alamat'];
            $radioFM -> latitude = $data['latitude'];
            $radioFM -> longitude = $data['longitude'];

            $radioFM -> save();
            $status = 'succes';
            return response()->json(compact('status', 'Radio FM'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //delete function
    public function deleteRadioFM($id){
        $book = RadioFM::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
