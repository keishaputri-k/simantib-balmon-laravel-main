<?php

namespace App\Http\Controllers;

use App\Models\MicrowaveLink;
use App\Models\Penyelenggara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function JmesPath\search;

class CompareController extends Controller{
    public function readSimsCompare(Request $request){
        if ($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                // $data = DB::table('penyelenggaras')->where('curr_lic_num','LIKE', '%'.$query.'%')->get();
                $data = Penyelenggara::select()
                ->where('curr_lic_num','LIKE', '%'.$query.'%')
                ->take(1)
                ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                $i = 1;
                foreach($data as $penyelenggara)
                {
                    $output .= '
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">No ISR</th>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->curr_lic_num.'</p>
                            </td>
                        </tr>   
                        <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Link ID</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->link_id.'</p>
                        </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">STN Name</th>
                            <td >
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->stn_name.'</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">STN Lawan</th>
                            <td >
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->stasiun_lawan.'</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">Koor Long</th>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->longitude.'</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">Koor Lat</th>
                            <td >
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->latitude.'</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">Tx (MHz)</th>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->freq.'</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">Rx (MHz)</th>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->freq_pair.'</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">BW (MHz)</th>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->bwidht.'</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">Merk/Type Perangkat</th>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">'.$penyelenggara->eq_mdl.'</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">Keterangan</th>
                            <td>
                                <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-secondary text-xs font-weight-bolder opacity-7">Creation Date</th>
                            <td >
                                <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                        </tr>
                    ';
                    $i++;
                }
            }
            else
            {
                $output = '
                    <tr>
                        <td align="center" colspan="2">Data SIMS tidak ditemukan.</td>
                    </tr>
                ';
            }
            $data = array(
                'table_data' => $output,
            );

            echo json_encode($data);
        }
    }
    
    public function readPemeriksaanCompare(Request $request){
        if ($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                // $data = DB::table('microwave_links')->where('curr_lic_num','LIKE', '%'.$query.'%')->limit(1)->get();
                $data = MicrowaveLink::select()
                ->where('curr_lic_num','LIKE', '%'.$query.'%')
                ->take(1)
                ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                $i = 1;
                foreach($data as $ml)
                {
                    $output .= '
                    <tr>
                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Client Name</th>
                    <td >
                        <p class="text-xs font-weight-bold mb-0">'.$ml->client_name.'</p>
                    </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Curr Lic Num</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->curr_lic_num.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Link Id</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->link_id.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Tanggal</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->tanggal.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Metode</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->metode.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">No Risalah Hasil</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->no_risalah_hasil.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Stn Name</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->stn_name.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Stasiun Lawan</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->stasiun_lawan.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">KOOR Long</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->koor_long.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">KOOR Lat</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->koor_lat.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">TX(mhz)</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->tx_mhz.'</p>
                        </td> 
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">RX(mhz)</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->rx_mhz.'</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">BW(mhz)</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->bw_mhz.'}</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Merk Perangkat</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->merk_perangkat.'</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Sertifikat</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->sertifikat.'</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->status.'</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Keterangan</th>
                        <td >
                            <p class="text-xs font-weight-bold mb-0">'.$ml->keterangan.'</p>
                        </td>
                    </tr>
                    ';
                    $i++;
                }
            }
            else
            {
                $output = '
                    <tr>
                        <td align="center" colspan="2">Data Pemeriksaan tidak ditemukan.</td>
                    </tr>
                ';
            }
            $data = array(
                'table_data' => $output,
            );
            echo json_encode($data);
        }
    }
    function compareTable(){
       
    }
}
