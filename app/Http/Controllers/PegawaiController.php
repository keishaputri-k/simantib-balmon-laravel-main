<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
     //function Read
     public function readPegawai(){
        return Pegawai::all();
    }
    
    //function read id
    public function readIdPegawai($id){
        return Pegawai::findOrFail($id);
    }
    
    //function create
    public function createPegawai(Request $request){
        $data = $request->all();
        try{
            $pegawai = new Pegawai();
            $pegawai -> nip_pegawai = $data['nip_pegawai'];
            $pegawai -> nama_pegawai = $data['nama_pegawai'];
            $pegawai -> level_pegawai = $data['level_pegawai'];
            $pegawai -> password_pegawai = $data['password_pegawai'];

            $pegawai -> save();
            $status = 'succes';
            return response()->json(compact('status', 'pegawai'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }
    

    public function updatePegawai($id, Request $request){
        $data = $request->all();
        try{
            $pegawai = Pegawai::findOrFail($id);
            $pegawai -> nip_pegawai = $data['ni_pegawai'];
            $pegawai -> nama_pegawai = $data['nama_pegawai'];
            $pegawai -> level_pegawai = $data['level_pegawai'];
            $pegawai -> password_pegawai = $data['password_pegawai'];

            $pegawai -> save();
            $status = 'succes';
            return response()->json(compact('status', 'pegawai'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    public function deletePegawai($id){
        $book = Pegawai::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
