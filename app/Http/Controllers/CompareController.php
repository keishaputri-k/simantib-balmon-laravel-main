<?php

namespace App\Http\Controllers;

use App\Models\MicrowaveLink;
use App\Models\Penyelenggara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function JmesPath\search;

class CompareController extends Controller{
    // coba2 I
    // public function readSimsCompare(Request $request){
    //     $search_text = $_GET['search'];
    //     $search_text2 = $_GET['search-pemeriksaan'];
    //     $penyelenggara = DB::table('penyelenggaras')->where('curr_lic_num','LIKE', '%'.$search_text.'%')->paginate(1);
    //     $ml = DB::table('microwave_links')->where('curr_lic_num','LIKE', '%'.$search_text2.'%')->paginate(1);

    //     return view('comparation', ['penyelenggaraList' => $penyelenggara, 'microwaveLinkList' => $ml])->render();
    // }

    public function readSimsCompare(Request $request){

        if(isset($_GET['search'])){
            $search_text = $_GET['search'];
            $penyelenggara = DB::table('penyelenggaras')->where('curr_lic_num','LIKE', '%'.$search_text.'%')->paginate(1);
            return view('comparation', ['penyelenggaraList' => $penyelenggara]);
        }else{
            return view('comparation');
        }
    }
    public function readPemeriksaanCompare(Request $request){
        if(isset($_GET['search-pemeriksaan'])){
            $search_text2 = $_GET['search-pemeriksaan'];
            $ml = DB::table('microwave_links')->where('curr_lic_num','LIKE', '%'.$search_text2.'%')->paginate(1);
            return view('comparation', ['microwaveLinkList' => $ml]);
        }else{
            return view('comparation');
        }
    }

    //coba2 II
    // public function readSimsCompare(Request $request){
    //     $sims = $request->get('search');
    //     $pemeriksaan = $request->get('search-pemeriksaan');
    //     $simsSearch = $sims ? Penyelenggara::where('curr_lic_num', 'LIKE', '%'.$sims.'%')->get()->toArray() : [];
    //     $simsSearch = array_merge($simsSearch, $pemeriksaan ?? []);
    //     $ml = MicrowaveLink::where('curr_lic_num', $simsSearch)->get()->toArray();
    
    //     return view('comparation',compact('ml'));
    // }
}
