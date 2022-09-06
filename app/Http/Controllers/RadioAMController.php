<?php

namespace App\Http\Controllers;

use App\Models\RadioAM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RadioAMController extends Controller
{
    //function Read
    public function readRadioAM(){
        $ram = DB::table('radio_a_m_s');
        return view('laravel-examples.radio-am',[
            'ramList' => $ram
            ->paginate(10)
        ]);
    }

    //function id Read
    public function readIdRadioAM($id){
        return RadioAM::findOrFail($id);
    }

    //function create
    public function createRadioAM(Request $request){
        $data = $request->all();
        try{
            $radioAM = new RadioAM();
            $radioAM -> nama_stasiun_radio = $data['nama_stasiun_radio'];
            $radioAM -> lokasi_pemancar = $data['lokasi_pemancar'];
            $radioAM -> frekuensi_terukur_mhz = $data['frekuensi_terukur_mhz'];
            $radioAM -> lokasi_pemancar_kecamatan = $data['lokasi_pemancar_kecamatan'];
            $radioAM -> kab_kota = $data['kab_kota'];
            $radioAM -> provinsi = $data['provinsi'];
            $radioAM -> no_spt = $data['no_spt'];
            $radioAM -> tanggal_spt = $data['tanggal_spt'];
            $radioAM -> kecamatan = $data['kecamatan'];
            $radioAM -> alamat = $data['alamat'];
            $radioAM -> latitude = $data['latitude'];
            $radioAM -> longitude = $data['longitude'];

            $radioAM -> save();
            $status = 'succes';
            return redirect('/radio-am')->with('status','Data created Successfully');
        }catch(\Throwable $th){
            //throw $th
            $status = 'error';
            return redirect('/radio-am')->with('status','Data created Successfully');
        }
    }

    //function update
    public function updateRadioAM($id, Request $request){
        $data = $request->all();
        try{
            $radioAM = RadioAM::findOrFail($id);
            $radioAM -> nama_stasiun_radio = $data['nama_stasiun_radio'];
            $radioAM -> lokasi_pemancar = $data['lokasi_pemancar'];
            $radioAM -> frekuensi_terukur_mhz = $data['frekuensi_terukur_mhz'];
            $radioAM -> lokasi_pemancar_kecamatan = $data['lokasi_pemancar_kecamatan'];
            $radioAM -> kab_kota = $data['kab_kota'];
            $radioAM -> provinsi = $data['provinsi'];
            $radioAM -> no_spt = $data['no_spt'];
            $radioAM -> tanggal_spt = $data['tanggal_spt'];
            $radioAM -> kecamatan = $data['kecamatan'];
            $radioAM -> alamat = $data['alamat'];
            $radioAM -> latitude = $data['latitude'];
            $radioAM -> longitude = $data['longitude'];

            $radioAM -> save();
            return redirect('/radio-am')->with('status','Data created Successfully');
        }catch(\Throwable $th){
            //throw $th
            return redirect('/radio-am')->with('status','Data created Successfully');
        }
    }

    //delete function
    public function deleteRadioAM($id){
        $ram = RadioAM::findOrFail($id);
        $ram -> delete();

        return redirect('/radio-am')->with('status','Data deleted Successfully');
    }
}
