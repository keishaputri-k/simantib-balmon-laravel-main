<?php

namespace App\Http\Controllers;

use App\Models\Pap2ghz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pap2ghzController extends Controller
{
    //function Read
    public function readPap2ghz(){
        $pap2ghz = DB::table('pap2ghzs');
        return view('kelas-izin.2-4ghz',[
            'pap2ghzList' => $pap2ghz 
            ->paginate(10)]
        );
    }

    //function Read
    public function readIdPap2ghz($id){
        return Pap2ghz::findOrFail($id);
    }

    //function 
    public function createPap2ghz(Request $request){
        $data = $request->all();
        try{
            $pap2ghz = new Pap2ghz();
            $pap2ghz -> tanggal = $data['tanggal'];
            $pap2ghz -> alamat_lokasi_perangkat_pemancar = $data['alamat_lokasi_perangkat_pemancar'];
            $pap2ghz -> koor_perangkat_lantitude = $data['koor_perangkat_lantitude'];
            $pap2ghz -> koor_perangkat_longitude = $data['koor_perangkat_longitude'];
            $pap2ghz -> frekuensi = $data['frekuensi'];
            $pap2ghz -> merk_perangkat = $data['merk_perangkat'];
            $pap2ghz -> tipe_perangkat = $data['tipe_perangkat'];
            $pap2ghz -> pic_nama = $data['pic_nama'];
            $pap2ghz -> pic_no_tlp = $data['pic_no_tlp'];
            $pap2ghz -> pic_email = $data['pic_email'];
        
           $pap2ghz -> save();
           $status = 'succes';
           return redirect('/2-4ghz')->with('status','Data Created Successfully');
       }catch(\Throwable $th){
           //throw $th
           $status = 'error';
           return redirect('/2-4ghz')->with('status','Data Created Successfully');
       }
    }

     //update function
     public function updatePap2ghz($id, Request $request){
        $data = $request->all();
        try{
            $pap2ghz = new Pap2ghz();
            $pap2ghz -> tanggal = $data['tanggal'];
            $pap2ghz -> alamat_lokasi_perangkat_pemancar = $data['alamat_lokasi_perangkat_pemancar'];
            $pap2ghz -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $pap2ghz -> koor_perangkat_lantitude = $data['koor_perangkat_lantitude'];
            $pap2ghz -> koor_perangkat_longitude = $data['koor_perangkat_longitude'];
            $pap2ghz -> frekuensi = $data['frekuensi'];
            $pap2ghz -> merk_perangkat = $data['merk_perangkat'];
            $pap2ghz -> tipe_perangkat = $data['tipe_perangkat'];
            $pap2ghz -> pic_nama = $data['pic_nama'];
            $pap2ghz -> pic_no_tlp = $data['pic_no_tlp'];
            $pap2ghz -> pic_email = $data['pic_email'];

            $pap2ghz-> save();
            $status = 'succes';
            return redirect('/2-4ghz')->with('status','Data Created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/2-4ghz')->with('status','Data Created Successfully');
        }
    }

    //delete function
    public function deletePap2ghz($id){
        $pap2ghz = Pap2ghz::findOrFail($id);
        $pap2ghz -> delete();

        $status = "delete status";
        return redirect('/2-4ghz')->with('status','Data deleted Successfully');
    }
}
