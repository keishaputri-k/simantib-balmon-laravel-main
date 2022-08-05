<?php

namespace App\Http\Controllers;

use App\Models\Penyelenggara;
use Illuminate\Http\Request;

class PenyeleggaraController extends Controller
{
    //function Read
    public function readPenyelenggara($id){
        return Penyelenggara::findOrFail($id);
    }
    
    //function create
    public function createPenyelenggara(Request $request){
        $data = $request->all();
        try{
            $penyelenggara = new Penyelenggara();
            $penyelenggara -> no_penyelenggara = $data['no_penyelenggara'];
            $penyelenggara -> nama_penyelenggara = $data['nama_penyelenggara'];
            $penyelenggara -> alamat_penyelenggara = $data['alamat_penyelenggara'];
            $penyelenggara -> lantitide_penyelenggara = $data['lantitude_penyelenggara'];
            $penyelenggara -> longitude_penyelenggara = $data['longitude_penyelenggara'];
            $penyelenggara -> frekuensi_penyelenggara = $data['frekuensi_penyelenggara'];
            $penyelenggara -> bandwidth_penyelenggara = $data['bandwidth_penyelenggara'];
            $penyelenggara -> author_id = $data['author_id'];

            $penyelenggara -> save();
            $status = 'succes';
            return response()->json(compact('status', 'penyelenggara'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }
    

    public function updatePenyelenggara($id, Request $request){
        $data = $request->all();
        try{
            $penyelenggara = new Penyelenggara();
            $penyelenggara -> no_penyelenggara = $data['no_penyelenggara'];
            $penyelenggara -> nama_penyelenggara = $data['nama_penyelenggara'];
            $penyelenggara -> alamat_penyelenggara = $data['alamat_penyelenggara'];
            $penyelenggara -> lantitide_penyelenggara = $data['lantitude_penyelenggara'];
            $penyelenggara -> longitude_penyelenggara = $data['longitude_penyelenggara'];
            $penyelenggara -> frekuensi_penyelenggara = $data['frekuensi_penyelenggara'];
            $penyelenggara -> bandwidth_penyelenggara = $data['bandwidth_penyelenggara'];
            $penyelenggara -> author_id = $data['author_id'];

            $penyelenggara -> save();
            $status = 'succes';
            return response()->json(compact('status', 'penyelenggara'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    public function deletePenyelenggara($id){
        $book = Penyelenggara::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
