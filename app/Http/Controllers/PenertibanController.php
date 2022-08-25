<?php

namespace App\Http\Controllers;

use App\Models\Penertiban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenertibanController extends Controller
{
    //function Read
    public function readPenertiban(){
        $penertiban = DB::table('penertiban');
        return view('penertiban',[
            'penertibanList' => $penertiban
            ->paginate(10)
        ]);
    }

    //function id Read
    public function readIdPenertiban($id){
        return Penertiban::findOrFail($id);

    }

    //function create
    public function createPenertiban(Request $request){
        $data = $request->all();
        try{
            $penertiban = new Penertiban();
            $penertiban -> tgl_observasi = $data['tgl_observasi'];
            $penertiban -> nama_pengguna = $data['nama_pengguna'];
            $penertiban -> frekuensi = $data['frekuensi'];
            $penertiban -> subservice = $data['subservice'];
            $penertiban -> dinas = $data['dinas'];
            $penertiban -> jenis_pelanggaran = $data['jenis_pelanggaran'];
            $penertiban -> kab_kota = $data['kab_kota'];
            $penertiban -> tindakan = $data['tindakan'];
            $penertiban -> status = $data['status'];
            $penertiban -> tgl_operasi_stasiun = $data['tgl_operasi_stasiun'];
            $penertiban -> no_isr = $data['no_isr'];
            $penertiban -> no_surat_penindakan = $data['no_surat_penindakan'];
            $penertiban -> tgl_penindakan = $data['tgl_penindakan'];
            $penertiban -> keterangan = $data['keterangan'];

            $penertiban -> save();
            $status = 'succes';
            return response()->json(compact('status', 'penertiban'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //update
    public function updatePegawai($id, Request $request){
        $data = $request->all();
        try{
            $penertiban = Penertiban::findOrFail($id);
            $penertiban -> tgl_observasi = $data['tgl_observasi'];
            $penertiban -> nama_pengguna = $data['nama_pengguna'];
            $penertiban -> frekuensi = $data['frekuensi'];
            $penertiban -> subservice = $data['subservice'];
            $penertiban -> dinas = $data['dinas'];
            $penertiban -> jenis_pelanggaran = $data['jenis_pelanggaran'];
            $penertiban -> kab_kota = $data['kab_kota'];
            $penertiban -> tindakan = $data['tindakan'];
            $penertiban -> status = $data['status'];
            $penertiban -> tgl_operasi_stasiun = $data['tgl_operasi_stasiun'];
            $penertiban -> no_isr = $data['no_isr'];
            $penertiban -> no_surat_penindakan = $data['no_surat_penindakan'];
            $penertiban -> tgl_penindakan = $data['tgl_penindakan'];
            $penertiban -> keterangan = $data['keterangan'];
            $penertiban -> save();
            
            $status = 'succes';
            return response()->json(compact('status', 'penertiban'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    public function deletePenertiban($id){
        $book = Penertiban::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
