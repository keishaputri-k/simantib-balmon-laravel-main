<?php

namespace App\Http\Controllers;

use App\Models\TvAnalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TvAnalogController extends Controller
{
    //function Read
    public function readTvAnalog(){
        $tvAnalog = DB::table('tv_analogs');
        return view('laravel-examples.tv-analog',[
            'tvAnalogList' => $tvAnalog
            ->paginate(10)
        ]);
    }

    //function Read
    public function readIdTvAnalog($id){
        return TvAnalog::findOrFail($id);
    }

     //function create
     public function createTvAnalog(Request $request){
        $data = $request->all();
        try{
            $tvAnalog = new TvAnalog();
            $tvAnalog -> logo = $data['logo'];
            $tvAnalog -> alamat = $data['alamat'];
            $tvAnalog -> no_spt = $data['no_spt'];
            $tvAnalog -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $tvAnalog -> penyelenggara_layanan = $data['penyelenggara_layanan'];
            $tvAnalog -> kanal = $data['kanal'];
            $tvAnalog -> status = $data['status'];
            $tvAnalog -> frekuensi = $data['frekuensi'];
            $tvAnalog -> level = $data['level'];
            $tvAnalog -> bandwidth = $data['bandwidth'];
            $tvAnalog -> code_rate = $data['code_rate'];
            $tvAnalog -> guard_interval = $data['guard_interval'];
            $tvAnalog -> Program_penyelenggaraan_1 = $data['Program_penyelenggaraan_1'];
            $tvAnalog -> program_standar_1 = $data['program_standar_1'];
            $tvAnalog -> Program_penyelenggaraan_2 = $data['Program_penyelenggaraan_2'];
            $tvAnalog -> program_standar_2 = $data['program_standar_2'];
            $tvAnalog -> Program_penyelenggaraan_3 = $data['Program_penyelenggaraan_3'];
            $tvAnalog -> program_standar_3 = $data['program_standar_3'];
            $tvAnalog -> Program_penyelenggaraan_4 = $data['Program_penyelenggaraan_4'];
            $tvAnalog -> program_standar_4 = $data['program_standar_4'];
            $tvAnalog -> Program_penyelenggaraan_5 = $data['Program_penyelenggaraan_5'];
            $tvAnalog -> program_standar_5 = $data['program_standar_5'];
            $tvAnalog -> Program_penyelenggaraan_6 = $data['Program_penyelenggaraan_6'];
            $tvAnalog -> program_standar_6 = $data['program_standar_6'];
            $tvAnalog -> Program_penyelenggaraan_7 = $data['Program_penyelenggaraan_7'];
            $tvAnalog -> program_standar_7 = $data['program_standar_7'];
            $tvAnalog -> Program_penyelenggaraan_8 = $data['Program_penyelenggaraan_8'];
            $tvAnalog -> program_standar_8 = $data['program_standar_8'];
            $tvAnalog -> Program_penyelenggaraan_9 = $data['Program_penyelenggaraan_9'];
            $tvAnalog -> program_standar_9 = $data['program_standar_9'];
            $tvAnalog -> Program_penyelenggaraan_10 = $data['Program_penyelenggaraan_10'];
            $tvAnalog -> program_standar_10 = $data['program_standar_10'];
            $tvAnalog -> Program_penyelenggaraan_11 = $data['Program_penyelenggaraan_11'];
            $tvAnalog -> program_standar_11 = $data['program_standar_11'];
            $tvAnalog -> Program_penyelenggaraan_12 = $data['Program_penyelenggaraan_12'];
            $tvAnalog -> program_standar_12 = $data['program_standar_12'];

            $tvAnalog -> save();
            $status = 'succes';
            return response()->json(compact('status', 'Tv Analog'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),404);
        }
    }

    //update function
    public function updateTvAnalog($id, Request $request){
        $data = $request->all();
        try{
            $tvAnalog = TvAnalog::findOrFail($id);
            $tvAnalog -> logo = $data['logo'];
            $tvAnalog -> nama_penyelenggara = $data['nama_penyelenggara'];
            $tvAnalog -> alamat = $data['alamat'];
            $tvAnalog -> no_spt = $data['no_spt'];
            $tvAnalog -> tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
            $tvAnalog -> penyelenggara_layanan = $data['penyelenggara_layanan'];
            $tvAnalog -> kanal = $data['kanal'];
            $tvAnalog -> status = $data['status'];
            $tvAnalog -> frekuensi = $data['frekuensi'];
            $tvAnalog -> level = $data['level'];
            $tvAnalog -> bandwidth = $data['bandwidth'];
            $tvAnalog -> code_rate = $data['code_rate'];
            $tvAnalog -> guard_interval = $data['guard_interval'];
            $tvAnalog -> Program_penyelenggaraan_1 = $data['Program_penyelenggaraan_1'];
            $tvAnalog -> program_standar_1 = $data['program_standar_1'];
            $tvAnalog -> Program_penyelenggaraan_2 = $data['Program_penyelenggaraan_2'];
            $tvAnalog -> program_standar_2 = $data['program_standar_2'];
            $tvAnalog -> Program_penyelenggaraan_3 = $data['Program_penyelenggaraan_3'];
            $tvAnalog -> program_standar_3 = $data['program_standar_3'];
            $tvAnalog -> Program_penyelenggaraan_4 = $data['Program_penyelenggaraan_4'];
            $tvAnalog -> program_standar_4 = $data['program_standar_4'];
            $tvAnalog -> Program_penyelenggaraan_5 = $data['Program_penyelenggaraan_5'];
            $tvAnalog -> program_standar_5 = $data['program_standar_5'];
            $tvAnalog -> Program_penyelenggaraan_6 = $data['Program_penyelenggaraan_6'];
            $tvAnalog -> program_standar_6 = $data['program_standar_6'];
            $tvAnalog -> Program_penyelenggaraan_7 = $data['Program_penyelenggaraan_7'];
            $tvAnalog -> program_standar_7 = $data['program_standar_7'];
            $tvAnalog -> Program_penyelenggaraan_8 = $data['Program_penyelenggaraan_8'];
            $tvAnalog -> program_standar_8 = $data['program_standar_8'];
            $tvAnalog -> Program_penyelenggaraan_9 = $data['Program_penyelenggaraan_9'];
            $tvAnalog -> program_standar_9 = $data['program_standar_9'];
            $tvAnalog -> Program_penyelenggaraan_10 = $data['Program_penyelenggaraan_10'];
            $tvAnalog -> program_standar_10 = $data['program_standar_10'];
            $tvAnalog -> Program_penyelenggaraan_11 = $data['Program_penyelenggaraan_11'];
            $tvAnalog -> program_standar_11 = $data['program_standar_11'];
            $tvAnalog -> Program_penyelenggaraan_12 = $data['Program_penyelenggaraan_12'];
            $tvAnalog -> program_standar_12 = $data['program_standar_12'];

            $tvAnalog -> save();
            $status = 'succes';
            return response()->json(compact('status', 'Tv Analog'),200);
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return response()->json(compact('status', 'th'),200);
        }
    }

    //delete function
    public function deleteTvAnalog($id){
        $book = TvAnalog::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return response()->json(compact('status'),200);
    }
}
