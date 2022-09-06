<?php

namespace App\Http\Controllers;

use App\Models\PenangananGangguan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenangananGangguanController extends Controller
{
    //function Read
     public function readPenangananGangguan(){
        $penangananGangguan = DB::table('penanganan_gangguans');
        return view('penanganan-gangguan',[
            'penangananGangguanList' => $penangananGangguan
            ->paginate(10)
        ]);
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
            $pg -> servis = $data['servis'];
            $pg -> pihak_terganggu = $data['pihak_terganggu'];
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
            return redirect('/penanganan-gangguan')->with('status','Data created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/penanganan-gangguan')->with('status','Data created Successfully');
        }
    }

    //function update
    public function updatePenangananGangguan($id, Request $request){
        $data = $request->all();
        try{
            $pg = PenangananGangguan::find($id);
            $pg -> upt = $data['upt'];
            $pg -> no_isr = $data['no_isr'];
            $pg -> no_surat_pengaduan = $data['no_surat_pengaduan'];
            $pg -> tgl_surat_pengaduan = $data['tgl_surat_pengaduan'];
            $pg -> tgl_terima_surat_pengaduan = $data['tgl_terima_surat_pengaduan'];
            $pg -> tgl_spt_pengukuran_karasteristik_frekuensi_radio = $data['tgl_spt_pengukuran_karasteristik_frekuensi_radio'];
            $pg -> uraian_kasus = $data['uraian_kasus'];
            $pg -> frekuensi_terganggu = $data['frekuensi_terganggu'];
            $pg -> pihak_terganggu = $data['pihak_terganggu'];
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
            return redirect('/penanganan-gangguan')->with('status','Data created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/penanganan-gangguan')->with('status','Data created Successfully');
        }
    }

    //delete function
    public function deletePenangananGangguan($id){
        $book = PenangananGangguan::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return redirect('/penanganan-gangguan')->with('status','Data deleted Successfully');
    }
}
