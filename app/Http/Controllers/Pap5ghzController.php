<?php

namespace App\Http\Controllers;

use App\Models\Pap5ghz;
use Illuminate\Http\Request;

class Pap5ghzController extends Controller
{
    ////function Read
    public function readPap5ghz($id){
        return Pap5ghz::findOrFail($id);
}
    //function 
    public function createPap5ghz(Request $request){
        $data = $request->all();
        try{
            $pap5ghz = new Pap5ghz();
            $pap5ghz -> upt = $data['upt'];
            $pap5ghz -> tanggal = $data['tanggal'];
            $pap5ghz -> nama_pengguna = $data['nama_pengguna'];
            $pap5ghz -> alamat_lokasi_perangkat_pemancar = $data['alamat_lokasi_perangkat_pemancar'];
            $pap5ghz -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $pap5ghz -> koor_perangkat_lantitude = $data['koor_perangkat_lantitude'];
            $pap5ghz -> koor_perangkat_longitude = $data['koor_perangkat_longitude'];
            $pap5ghz -> frekuensi = $data['frekuensi'];
            $pap5ghz -> merk_perangkat = $data['merk_perangkat'];
            $pap5ghz -> level = $data['level'];
            $pap5ghz -> pic_nama = $data['pic_nama'];
            $pap5ghz -> pic_no_tlp = $data['pic_no_tlp'];
            $pap5ghz -> gpic_email = $data['gpic_email'];
        
           $pap5ghz -> save();
            $status = 'succes';
            return response()->json(compact('status', 'Pap 5ghz'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }
     //update function
     public function updatePap5ghz($id, Request $request){
        $data = $request->all();
        try{
            $pap5ghz = new Pap5ghz();
            $pap5ghz -> upt = $data['upt'];
            $pap5ghz -> tanggal = $data['tanggal'];
            $pap5ghz -> nama_pengguna = $data['nama_pengguna'];
            $pap5ghz -> alamat_lokasi_perangkat_pemancar = $data['alamat_lokasi_perangkat_pemancar'];
            $pap5ghz -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $pap5ghz -> koor_perangkat_lantitude = $data['koor_perangkat_lantitude'];
            $pap5ghz -> koor_perangkat_longitude = $data['koor_perangkat_longitude'];
            $pap5ghz -> frekuensi = $data['frekuensi'];
            $pap5ghz -> merk_perangkat = $data['merk_perangkat'];
            $pap5ghz -> level = $data['level'];
            $pap5ghz -> pic_nama = $data['pic_nama'];
            $pap5ghz -> pic_no_tlp = $data['pic_no_tlp'];
            $pap5ghz -> gpic_email = $data['gpic_email'];

            $pap5ghz-> save();
            $status = 'succes';
            return response()->json(compact('status', 'Pap 5ghz'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //delete function
    public function deletePap5ghz($id){
        $book = Pap5ghz::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}

