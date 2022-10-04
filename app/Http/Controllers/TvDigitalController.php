<?php

namespace App\Http\Controllers;

use App\Models\TvDigital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TvDigitalController extends Controller
{    
    //function Read
    public function readTvDigital(){
        $tvDigital = DB::table('tv_digitals');
        return view('laravel-examples.tv-digital',[
            'tvDigitalList' => $tvDigital
            ->paginate(10)
        ]);
    }

    //function Read
    public function readIdTvDigtal($id){
        return TvDigital::findOrFail($id);
    }

    //function create
    public function createTvDigital(Request $request){
        $data = $request->all();
        try{
            $tvDigital = new TvDigital();
            $tvDigital -> alamat = $data['alamat'];
            $tvDigital -> no_spt = $data['no_spt'];
            $tvDigital -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $tvDigital -> penyelenggara_layanan = $data['penyelenggara_layanan'];
            $tvDigital -> kanal = $data['kanal'];
            $tvDigital -> status = $data['status'];
            $tvDigital -> frekuensi = $data['frekuensi'];
            $tvDigital -> level = $data['level'];
            $tvDigital -> bandwidth = $data['bandwidth'];
            $tvDigital -> code_rate = $data['code_rate'];
            $tvDigital -> guard_interval = $data['guard_interval'];
            $tvDigital -> program_penyelenggaraan_1 = $data['program_penyelenggaraan_1'];
            $tvDigital -> program_standar_1 = $data['program_standar_1'];
            $tvDigital -> program_penyelenggaraan_2 = $data['program_penyelenggaraan_2'];
            $tvDigital -> program_standar_2 = $data['program_standar_2'];
            $tvDigital -> program_penyelenggaraan_3 = $data['program_penyelenggaraan_3'];
            $tvDigital -> program_standar_3 = $data['program_standar_3'];
            $tvDigital -> program_penyelenggaraan_4 = $data['program_penyelenggaraan_4'];
            $tvDigital -> program_standar_4 = $data['program_standar_4'];
            $tvDigital -> program_penyelenggaraan_5 = $data['program_penyelenggaraan_5'];
            $tvDigital -> program_standar_5 = $data['program_standar_5'];
            $tvDigital -> program_penyelenggaraan_6 = $data['program_penyelenggaraan_6'];
            $tvDigital -> program_standar_6 = $data['program_standar_6'];
            $tvDigital -> program_penyelenggaraan_7 = $data['program_penyelenggaraan_7'];
            $tvDigital -> program_standar_7 = $data['program_standar_7'];
            $tvDigital -> program_penyelenggaraan_8 = $data['program_penyelenggaraan_8'];
            $tvDigital -> program_standar_8 = $data['program_standar_8'];
            $tvDigital -> program_penyelenggaraan_9 = $data['program_penyelenggaraan_9'];
            $tvDigital -> program_standar_9 = $data['program_standar_9'];
            $tvDigital -> program_penyelenggaraan_10 = $data['program_penyelenggaraan_10'];
            $tvDigital -> program_standar_10 = $data['program_standar_10'];
            $tvDigital -> program_penyelenggaraan_11 = $data['program_penyelenggaraan_11'];
            $tvDigital -> program_standar_11 = $data['program_standar_11'];
            $tvDigital -> program_penyelenggaraan_12 = $data['program_penyelenggaraan_12'];
            $tvDigital -> program_standar_12 = $data['program_standar_12'];

            $tvDigital -> save();
            $status = 'succes';
            return redirect('/tv-digital')->with('status','Data deleted Successfully');
        }catch(\Throwable $th){
            //throw $thx
            $status = 'error';
            return redirect('/tv-digital')->with('status','Data deleted Successfully');
        }
    }

    //update create
    public function updateTvDigital($id,Request $request){
        $data = $request->all();
        try{
            $tvDigital = TvDigital::findOrFail($id);
            $tvDigital -> alamat = $data['alamat'];
            $tvDigital -> no_spt = $data['no_spt'];
            $tvDigital -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $tvDigital -> penyelenggara_layanan = $data['penyelenggara_layanan'];
            $tvDigital -> kanal = $data['kanal'];
            $tvDigital -> status = $data['status'];
            $tvDigital -> frekuensi = $data['frekuensi'];
            $tvDigital -> level = $data['level'];
            $tvDigital -> bandwidth = $data['bandwidth'];
            $tvDigital -> code_rate = $data['code_rate'];
            $tvDigital -> guard_interval = $data['guard_interval'];
            $tvDigital -> Program_penyelenggaraan_1 = $data['Program_penyelenggaraan_1'];
            $tvDigital -> program_standar_1 = $data['program_standar_1'];
            $tvDigital -> Program_penyelenggaraan_2 = $data['Program_penyelenggaraan_2'];
            $tvDigital -> program_standar_2 = $data['program_standar_2'];
            $tvDigital -> Program_penyelenggaraan_3 = $data['Program_penyelenggaraan_3'];
            $tvDigital -> program_standar_3 = $data['program_standar_3'];
            $tvDigital -> Program_penyelenggaraan_4 = $data['Program_penyelenggaraan_4'];
            $tvDigital -> program_standar_4 = $data['program_standar_4'];
            $tvDigital -> Program_penyelenggaraan_5 = $data['Program_penyelenggaraan_5'];
            $tvDigital -> program_standar_5 = $data['program_standar_5'];
            $tvDigital -> Program_penyelenggaraan_6 = $data['Program_penyelenggaraan_6'];
            $tvDigital -> program_standar_6 = $data['program_standar_6'];
            $tvDigital -> Program_penyelenggaraan_7 = $data['Program_penyelenggaraan_7'];
            $tvDigital -> program_standar_7 = $data['program_standar_7'];
            $tvDigital -> Program_penyelenggaraan_8 = $data['Program_penyelenggaraan_8'];
            $tvDigital -> program_standar_8 = $data['program_standar_8'];
            $tvDigital -> Program_penyelenggaraan_9 = $data['Program_penyelenggaraan_9'];
            $tvDigital -> program_standar_9 = $data['program_standar_9'];
            $tvDigital -> Program_penyelenggaraan_10 = $data['Program_penyelenggaraan_10'];
            $tvDigital -> program_standar_10 = $data['program_standar_10'];
            $tvDigital -> Program_penyelenggaraan_11 = $data['Program_penyelenggaraan_11'];
            $tvDigital -> program_standar_11 = $data['program_standar_11'];
            $tvDigital -> Program_penyelenggaraan_12 = $data['Program_penyelenggaraan_12'];
            $tvDigital -> program_standar_12 = $data['program_standar_12'];

            $tvDigital -> save();
            $status = 'succes';
            return redirect('/tv-digital')->with('status','Data deleted Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/tv-digital')->with('status','Data deleted Successfully');
        }
    }

    public function deleteTvDigital($id){
        $tvDigital = TvDigital::findOrFail($id);
        $tvDigital -> delete();

        $status = "delete status";
        return redirect('/tv-digital')->with('status','Data deleted Successfully');
    }
}
