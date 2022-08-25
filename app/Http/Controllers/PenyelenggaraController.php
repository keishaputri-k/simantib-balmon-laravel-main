<?php

namespace App\Http\Controllers;

use App\Imports\PenyelenggaraImport;
use App\Models\Penyelenggara;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;
use Maatwebsite\Excel\Excel;

class PenyelenggaraController extends Controller
{
    //function Read
    public function readPenyelenggara(){
        $penyelenggara = DB::table('penyelenggaras');
        return view('penyelenggara',[
            'penyelenggaraList' => $penyelenggara 
            ->paginate(10)
        ]);
    }

    //function Id Read
    public function readIdPenyelenggara($id){
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
            $penyelenggara -> latitude = $data['latitude'];
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

    public function import_penyelenggara(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_penyelenggara',$nama_file);
 
		// import data
		Excel::import(new PenyelenggaraImport, public_path('/file_penyelenggara/'.$nama_file));
 
		// notifikasi dengan session
		FacadesSession::flash('sukses','Data Siswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/penyelenggara');
	}
}
