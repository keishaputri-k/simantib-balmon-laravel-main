<?php

namespace App\Http\Controllers;

use App\Models\PenangananGangguan;
use Illuminate\Http\Request;

class PenangananGangguanController extends Controller
{
    //function Read
     public function readPenangananGangguan(){
        return PenangananGangguan::all();

    }

    //function id Read
    public function readIdPenangananGangguan($id){
        return PenangananGangguan::findOrFail($id);

    }

    //function create
    public function createPenangananGangguan(Request $request){
        $data = $request->all();
        try{
            $pg = new PenangananGangguan();
            $pg -> upt = $data['upt'];
            $pg -> no_isr = $data['no_isr'];
            $pg -> no_surat_pengaduan = $data['no_surat_pengaduan'];
            $pg -> tgl_surat_pengaduan = $data['tgl_surat_pengaduan'];
            $pg -> tgl_terima_surat_pengaduan = $data['tgl_terima_surat_pengaduan'];
            $pg -> tgl_spt_pengukuran_karasteristik_frekuensi_radio = $data['tgl_spt_pengukuran_karasteristik_frekuensi_radio'];
            $pg -> uraian_kasus = $data['uraian_kasus'];
            $pg -> frekuensi_terganggu = $data['frekuensi_terganggu'];
            $pg -> pihak_pengganggu = $data['pihak_pengganggu'];
            $pg -> latitude_pengganggu = $data['latitude_pengganggu'];
            $pg -> longitude_pengganggu = $data['longitude_pengganggu'];
            $pg -> latitude_terganggu = $data['latitude_terganggu'];
            $pg -> longitude_terganggu = $data['longitude_terganggu'];
            $pg -> keterangan = $data['keterangan'];
            $pg -> tanggal_selesai_aduan = $data['tanggal_selesai_aduan'];
            $pg -> status = $data['status'];

            $pg -> save();
            $status = 'succes';
            return response()->json(compact('status', 'penangan gangguan'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //function update
    public function updatePenangananGangguan($id, Request $request){
        $data = $request->all();
        try{
            $pg = PenangananGangguan::findOrFail($id);
            $pg -> upt = $data['upt'];
            $pg -> no_isr = $data['no_isr'];
            $pg -> no_surat_pengaduan = $data['no_surat_pengaduan'];
            $pg -> tgl_surat_pengaduan = $data['tgl_surat_pengaduan'];
            $pg -> tgl_terima_surat_pengaduan = $data['tgl_terima_surat_pengaduan'];
            $pg -> tgl_spt_pengukuran_karasteristik_frekuensi_radio = $data['tgl_spt_pengukuran_karasteristik_frekuensi_radio'];
            $pg -> uraian_kasus = $data['uraian_kasus'];
            $pg -> frekuensi_terganggu = $data['frekuensi_terganggu'];
            $pg -> pihak_pengganggu = $data['pihak_pengganggu'];
            $pg -> latitude_pengganggu = $data['latitude_pengganggu'];
            $pg -> longitude_pengganggu = $data['longitude_pengganggu'];
            $pg -> latitude_terganggu = $data['latitude_terganggu'];
            $pg -> longitude_terganggu = $data['longitude_terganggu'];
            $pg -> keterangan = $data['keterangan'];
            $pg -> tanggal_selesai_aduan = $data['tanggal_selesai_aduan'];
            $pg -> status = $data['status'];

            $pg -> save();
            $status = 'succes';
            return response()->json(compact('status', 'penangan gangguan'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //delete function
    public function deletePenangananGangguan($id){
        $book = PenangananGangguan::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
