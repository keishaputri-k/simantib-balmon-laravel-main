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
            $tvAnalog -> program_penyelenggaraan_1 = $data['program_penyelenggaraan_1'];
            $tvAnalog -> program_standar_1 = $data['program_standar_1'];
            $tvAnalog -> program_penyelenggaraan_2 = $data['program_penyelenggaraan_2'];
            $tvAnalog -> program_standar_2 = $data['program_standar_2'];
            $tvAnalog -> program_penyelenggaraan_3 = $data['program_penyelenggaraan_3'];
            $tvAnalog -> program_standar_3 = $data['program_standar_3'];
            $tvAnalog -> program_penyelenggaraan_4 = $data['program_penyelenggaraan_4'];
            $tvAnalog -> program_standar_4 = $data['program_standar_4'];
            $tvAnalog -> program_penyelenggaraan_5 = $data['program_penyelenggaraan_5'];
            $tvAnalog -> program_standar_5 = $data['program_standar_5'];
            $tvAnalog -> program_penyelenggaraan_6 = $data['program_penyelenggaraan_6'];
            $tvAnalog -> program_standar_6 = $data['program_standar_6'];
            $tvAnalog -> program_penyelenggaraan_7 = $data['program_penyelenggaraan_7'];
            $tvAnalog -> program_standar_7 = $data['program_standar_7'];
            $tvAnalog -> program_penyelenggaraan_8 = $data['program_penyelenggaraan_8'];
            $tvAnalog -> program_standar_8 = $data['program_standar_8'];
            $tvAnalog -> program_penyelenggaraan_9 = $data['program_penyelenggaraan_9'];
            $tvAnalog -> program_standar_9 = $data['program_standar_9'];
            $tvAnalog -> program_penyelenggaraan_10 = $data['program_penyelenggaraan_10'];
            $tvAnalog -> program_standar_10 = $data['program_standar_10'];
            $tvAnalog -> program_penyelenggaraan_11 = $data['program_penyelenggaraan_11'];
            $tvAnalog -> program_standar_11 = $data['program_standar_11'];
            $tvAnalog -> program_penyelenggaraan_12 = $data['program_penyelenggaraan_12'];
            $tvAnalog -> program_standar_12 = $data['program_standar_12'];

            $tvAnalog -> save();
            $status = 'succes';
            return redirect('/tv-analog')->with('status','Data created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/tv-analog')->with('status','Data created Successfully');
        }
    }

    //update function
    public function updateTvAnalog($id, Request $request){
        $data = $request->all();
        try{
            $tvAnalog = TvAnalog::findOrFail($id);
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
            $tvAnalog -> program_penyelenggaraan_1 = $data['program_penyelenggaraan_1'];
            $tvAnalog -> program_standar_1 = $data['program_standar_1'];
            $tvAnalog -> program_penyelenggaraan_2 = $data['program_penyelenggaraan_2'];
            $tvAnalog -> program_standar_2 = $data['program_standar_2'];
            $tvAnalog -> program_penyelenggaraan_3 = $data['program_penyelenggaraan_3'];
            $tvAnalog -> program_standar_3 = $data['program_standar_3'];
            $tvAnalog -> program_penyelenggaraan_4 = $data['program_penyelenggaraan_4'];
            $tvAnalog -> program_standar_4 = $data['program_standar_4'];
            $tvAnalog -> program_penyelenggaraan_5 = $data['program_penyelenggaraan_5'];
            $tvAnalog -> program_standar_5 = $data['program_standar_5'];
            $tvAnalog -> program_penyelenggaraan_6 = $data['program_penyelenggaraan_6'];
            $tvAnalog -> program_standar_6 = $data['program_standar_6'];
            $tvAnalog -> program_penyelenggaraan_7 = $data['program_penyelenggaraan_7'];
            $tvAnalog -> program_standar_7 = $data['program_standar_7'];
            $tvAnalog -> program_penyelenggaraan_8 = $data['program_penyelenggaraan_8'];
            $tvAnalog -> program_standar_8 = $data['program_standar_8'];
            $tvAnalog -> program_penyelenggaraan_9 = $data['program_penyelenggaraan_9'];
            $tvAnalog -> program_standar_9 = $data['program_standar_9'];
            $tvAnalog -> program_penyelenggaraan_10 = $data['program_penyelenggaraan_10'];
            $tvAnalog -> program_standar_10 = $data['program_standar_10'];
            $tvAnalog -> program_penyelenggaraan_11 = $data['program_penyelenggaraan_11'];
            $tvAnalog -> program_standar_11 = $data['program_standar_11'];
            $tvAnalog -> program_penyelenggaraan_12 = $data['program_penyelenggaraan_12'];
            $tvAnalog -> program_standar_12 = $data['program_standar_12'];

            $tvAnalog -> save();
            $status = 'succes';
            return redirect('/tv-analog')->with('status','Data created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/tv-analog')->with('status','Data created Successfully');
        }
    }

    //delete function
    public function deleteTvAnalog($id){
        $book = TvAnalog::findOrFail($id);
        $book -> delete();

        $status = "delete status";
        return redirect('/tv-analog')->with('status','Data deleted Successfully');
    }
}
