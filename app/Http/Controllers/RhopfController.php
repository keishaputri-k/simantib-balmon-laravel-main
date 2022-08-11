<?php

namespace App\Http\Controllers;

use App\Models\RHOPF;
use Illuminate\Http\Request;

class RhopfController extends Controller
{
    //function Read
    public function readRHOPF(){
        return RHOPF::all();
    }

    //function id Read
    public function readIdRHOPF($id){
        return RHOPF::findOrFail($id);
    }

    //function create
    public function createRHOPF(Request $request){
        $data = $request->all();
        try{
            $rhopf = new RHOPF();
            $rhopf -> jenis_stasium_monitor = $data['jenis_stasium_monitor'];
            $rhopf -> tanggal = $data['tanggal'];
            $rhopf -> waktu = $data['waktu'];
            $rhopf -> band = $data['band'];
            $rhopf -> pita_frekuensi = $data['pita_frekuensi'];
            $rhopf -> frekuensi_mhz = $data['frekuensi_mhz'];
            $rhopf -> dinas = $data['dinas'];
            $rhopf -> sub_servis = $data['sub_servis'];
            $rhopf -> kelas_emisi = $data['kelas_emisi'];
            $rhopf -> kelas_stasiun = $data['kelas_stasiun'];
            $rhopf -> azimuth = $data['azimuth'];
            $rhopf -> level_dbz_m = $data['level_dbz_m'];
            $rhopf -> identifikasi = $data['identifikasi'];
            $rhopf -> legalitas = $data['legalitas'];
            $rhopf -> provinsi = $data['provinsi'];
            $rhopf -> kabupaten = $data['kabupaten'];
            $rhopf -> no_spt = $data['no_spt'];
            $rhopf -> tgl_spt = $data['tgl_spt'];
            $rhopf -> kecamatan = $data['kecamatan'];
            $rhopf -> jalan_lokasi = $data['jalan_lokasi'];
            $rhopf -> latitude = $data['latitude'];
            $rhopf -> longitude = $data['longitude'];

            $rhopf -> save();
            $status = 'succes';
            return response()->json(compact('status', 'penangan gangguan'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //function update
    public function updateRHOPF($id, Request $request){
        $data = $request->all();
        try{
            $rhopf = RHOPF::findOrFail($id);
            $rhopf -> jenis_stasium_monitor = $data['jenis_stasium_monitor'];
            $rhopf -> tanggal = $data['tanggal'];
            $rhopf -> waktu = $data['waktu'];
            $rhopf -> band = $data['band'];
            $rhopf -> pita_frekuensi = $data['pita_frekuensi'];
            $rhopf -> frekuensi_mhz = $data['frekuensi_mhz'];
            $rhopf -> dinas = $data['dinas'];
            $rhopf -> sub_servis = $data['sub_servis'];
            $rhopf -> kelas_emisi = $data['kelas_emisi'];
            $rhopf -> kelas_stasiun = $data['kelas_stasiun'];
            $rhopf -> azimuth = $data['azimuth'];
            $rhopf -> level_dbz_m = $data['level_dbz_m'];
            $rhopf -> identifikasi = $data['identifikasi'];
            $rhopf -> legalitas = $data['legalitas'];
            $rhopf -> provinsi = $data['provinsi'];
            $rhopf -> kabupaten = $data['kabupaten'];
            $rhopf -> no_spt = $data['no_spt'];
            $rhopf -> tgl_spt = $data['tgl_spt'];
            $rhopf -> kecamatan = $data['kecamatan'];
            $rhopf -> jalan_lokasi = $data['jalan_lokasi'];
            $rhopf -> latitude = $data['latitude'];
            $rhopf -> longitude = $data['longitude'];

            $rhopf -> save();
            $status = 'succes';
            return response()->json(compact('status', 'penangan gangguan'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //delete function
    public function deleteRHOPF($id){
        $book = RHOPF::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
