<?php

namespace App\Http\Controllers;

use App\Models\Penyelenggara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompareController extends Controller
{
    public function readCompare(Request $request){

        //method I
        if($request->has('search')){
            $comparasion = DB::table('penyelenggaras')->where('curr_lic_num','LIKE','%'.$request->search.'%')->get();
        }else{
            $comparasion = DB::table('penyelenggaras')->paginate(1);
        }

       
        return view('comparation', [
            'penyelenggaraList' => $comparasion
        ]);

        // method II
        // $compare = Penyelenggara::latest();

        // if(request('search')){
        //     $compare->where('curr_lic_num', 'like', '%' . request('search'). '%');

        // }
        // return view('comparation', [
        //     "penyelenggara" => $compare->get( )
        // ]);
    }
}
