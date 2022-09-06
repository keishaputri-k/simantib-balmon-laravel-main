<?php

namespace App\Http\Controllers;

use App\Models\Pap5ghz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pap5ghzController extends Controller
{
    //function Read
    public function readPap5ghz(){
        $pap5ghz = DB::table('pap5ghzs');
        return view('kelas-izin.pap5ghz',[
            'pap5ghzList' => $pap5ghz 
            ->paginate(10)]
        );
    }

    //function id Read
    public function readIdPap5ghz($id){
        return Pap5ghz::findOrFail($id);
    }

    //function 
    public function createPap5ghz(Request $request){
        $data = $request->all();
        try{
            $pap5ghz = new Pap5ghz();
            $pap5ghz-> tanggal = $data['tanggal'];
            $pap5ghz-> alamat_lokasi_perangkat_pemancar = $data['alamat_lokasi_perangkat_pemancar'];
            $pap5ghz-> koor_perangkat_lantitude = $data['koor_perangkat_lantitude'];
            $pap5ghz-> koor_perangkat_longitude = $data['koor_perangkat_longitude'];
            $pap5ghz-> frekuensi = $data['frekuensi'];
            $pap5ghz-> merk_perangkat = $data['merk_perangkat'];
            $pap5ghz-> tipe_perangkat = $data['tipe_perangkat'];
            $pap5ghz-> pic_nama = $data['pic_nama'];
            $pap5ghz-> pic_no_tlp = $data['pic_no_tlp'];
            $pap5ghz-> pic_email = $data['pic_email'];
        
            $pap5ghz -> save();
            $status = 'succes';
            return redirect('/pap5ghz')->with('status','Data Created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/pap5ghz')->with('status','Data Created Successfully');
        }
    }
     //update function
     public function updatePap5ghz($id, Request $request){
        $data = $request->all();
        try{
            $pap5ghz = new Pap5ghz();
            $pap5ghz -> tanggal = $data['tanggal'];
            $pap5ghz -> alamat_lokasi_perangkat_pemancar = $data['alamat_lokasi_perangkat_pemancar'];
            $pap5ghz -> koor_perangkat_lantitude = $data['koor_perangkat_latitude'];
            $pap5ghz -> koor_perangkat_longitude = $data['koor_perangkat_longitude'];
            $pap5ghz -> frekuensi = $data['frekuensi'];
            $pap5ghz -> merk_perangkat = $data['merk_perangkat'];
            $pap5ghz -> pic_nama = $data['pic_nama'];
            $pap5ghz -> pic_no_tlp = $data['pic_no_tlp'];
            $pap5ghz -> gpic_email = $data['gpic_email'];

            $pap5ghz-> save();
            $status = 'succes';
            return redirect('/pap5ghz')->with('status','Data Created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/pap5ghz')->with('status','Data Created Successfully');
        }
    }

    //delete function
    public function deletePap5ghz($id){
        $book = Pap5ghz::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return redirect('/pap5ghz')->with('status','Data Deleted Successfully');
    }
}

