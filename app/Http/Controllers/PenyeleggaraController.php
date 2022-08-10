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
            $penyelenggara -> curr_lic_num = $data['curr_lic_num'];
            $penyelenggara -> client_id = $data['client_id'];
            $penyelenggara -> application_id = $data['application_id'];
            $penyelenggara -> client_name = $data['client_name'];
            $penyelenggara -> freq = $data['freq'];
            $penyelenggara -> subservice = $data['subservice'];
            $penyelenggara -> freq_pair = $data['freq_pair'];
            $penyelenggara -> bwidht = $data['bwidht'];
            $penyelenggara -> eq_mdl = $data['eq_mdl'];
            $penyelenggara -> stn_name = $data['stn_name'];
            $penyelenggara -> stn_addr = $data['stn_addr'];
            $penyelenggara -> longitude = $data['longitude'];
            $penyelenggara -> lantitude = $data['lantitude'];
            $penyelenggara -> city = $data['city'];
            $penyelenggara -> district = $data['district'];
            $penyelenggara -> province = $data['province'];
            $penyelenggara -> link_id = $data['link_id'];
            $penyelenggara -> stasiun_lawan = $data['stasiun_lawan'];
            $penyelenggara -> corr_address = $data['corr_address'];

            $penyelenggara -> save();
            $status = 'succes';
            return response()->json(compact('status', 'penyelenggara'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }
    
    //update funcetion
    public function updatePenyelenggara($id, Request $request){
        $data = $request->all();
        try{
            $penyelenggara = Penyelenggara::findOrFail($id);
            $penyelenggara -> curr_lic_num = $data['curr_lic_num'];
            $penyelenggara -> client_id = $data['client_id'];
            $penyelenggara -> application_id = $data['application_id'];
            $penyelenggara -> client_name = $data['client_name'];
            $penyelenggara -> freq = $data['freq'];
            $penyelenggara -> subservice = $data['subservice'];
            $penyelenggara -> freq_pair = $data['freq_pair'];
            $penyelenggara -> bwidht = $data['bwidht'];
            $penyelenggara -> eq_mdl = $data['eq_mdl'];
            $penyelenggara -> stn_name = $data['stn_name'];
            $penyelenggara -> stn_addr = $data['stn_addr'];
            $penyelenggara -> longitude = $data['longitude'];
            $penyelenggara -> lantitude = $data['lantitude'];
            $penyelenggara -> city = $data['city'];
            $penyelenggara -> district = $data['district'];
            $penyelenggara -> province = $data['province'];
            $penyelenggara -> link_id = $data['link_id'];
            $penyelenggara -> stasiun_lawan = $data['stasiun_lawan'];
            $penyelenggara -> corr_address = $data['corr_address'];

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
