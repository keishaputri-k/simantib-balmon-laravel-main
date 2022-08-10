<?php

namespace App\Http\Controllers;

use App\Models\Pap2ghz;
use Illuminate\Http\Request;

class Pap2ghzController extends Controller
{
     ////function Read
     public function readPap2ghz($id){
        return Pap2ghz::findOrFail($id);
}
    //function 
    public function createPap2ghz(Request $request){
        $data = $request->all();
        try{
            $pap2ghz = new Pap2ghz();
            $pap2ghz -> upt = $data['upt'];
            $pap2ghz -> tanggal = $data['tanggal'];
            $pap2ghz -> nama_pengguna = $data['nama_pengguna'];
            $pap2ghz -> alamat_lokasi_perangkat_pemancar = $data['alamat_lokasi_perangkat_pemancar'];
            $pap2ghz -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $pap2ghz -> koor_perangkat_lantitude = $data['koor_perangkat_lantitude'];
            $pap2ghz -> koor_perangkat_longitude = $data['koor_perangkat_longitude'];
            $pap2ghz -> frekuensi = $data['frekuensi'];
            $pap2ghz -> merk_perangkat = $data['merk_perangkat'];
            $pap2ghz -> level = $data['level'];
            $pap2ghz -> pic_nama = $data['pic_nama'];
            $pap2ghz -> pic_no_tlp = $data['pic_no_tlp'];
            $pap2ghz -> gpic_email = $data['gpic_email'];
        
           $pap2ghz -> save();
            $status = 'succes';
            return response()->json(compact('status', 'Pap 2ghz'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }
     //update function
     public function updatePap2ghz($id, Request $request){
        $data = $request->all();
        try{
            $pap2ghz = new Pap2ghz();
            $pap2ghz -> upt = $data['upt'];
            $pap2ghz -> tanggal = $data['tanggal'];
            $pap2ghz -> nama_pengguna = $data['nama_pengguna'];
            $pap2ghz -> alamat_lokasi_perangkat_pemancar = $data['alamat_lokasi_perangkat_pemancar'];
            $pap2ghz -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $pap2ghz -> koor_perangkat_lantitude = $data['koor_perangkat_lantitude'];
            $pap2ghz -> koor_perangkat_longitude = $data['koor_perangkat_longitude'];
            $pap2ghz -> frekuensi = $data['frekuensi'];
            $pap2ghz -> merk_perangkat = $data['merk_perangkat'];
            $pap2ghz -> level = $data['level'];
            $pap2ghz -> pic_nama = $data['pic_nama'];
            $pap2ghz -> pic_no_tlp = $data['pic_no_tlp'];
            $pap2ghz -> gpic_email = $data['gpic_email'];

            $pap2ghz-> save();
            $status = 'succes';
            return response()->json(compact('status', 'Pap 2ghz'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //delete function
    public function deletePap2ghz($id){
        $book = Pap2ghz::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
