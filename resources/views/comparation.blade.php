@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <strong>Data tidak Sesuai!</strong> 
        </div>
        <div class="col-lg-6 mb-lg-0 mb-3 ">
            {{-- Search ISR SIMS --}}
            <div class="bg-white border-radius-lg d-inline-flex  mb-3">
                <i class="fas fa-search align-self-lg-center ps-3" aria-hidden="true"></i>
                <form action="/compare/get-sims" method="GET" class="border-0 ps-3">
                    <input type="search" id="search" name="search" class="form-control border-0" aria-label="Search"  placeholder="Type No ISR here..." value="{{ request('search') }}">
                </form>   
            </div>
            <div class="card mb-4 mx-4">
                <div class="card-header pb-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data SIMS</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        @if(isset($penyelenggaraList))
                        <table class="table align-items-center mb-0">
                            <thead >
                                @if(count($penyelenggaraList) > 0)
                                    @foreach ($penyelenggaraList as $penyelenggara)
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">No ISR</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{  $penyelenggara->curr_lic_num  }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Link ID</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{  $penyelenggara->link_id }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">STN Name</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $penyelenggara->stn_name }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">STN Lawan</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $penyelenggara->stasiun_lawan }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Koor Long</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $penyelenggara->longitude }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Koor Lat</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{$penyelenggara->latitude}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Tx (MHz)</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $penyelenggara->freq }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Rx (MHz)</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $penyelenggara->freq_pair }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">BW (MHz)</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $penyelenggara->bwidht }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Merk/Type Perangkat</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $penyelenggara->eq_mdl }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Keterangan</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Creation Date</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </thead>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            {{-- Search ISR Pemeriksaan --}}
            <div class="bg-white border-radius-lg d-inline-flex  mb-3">
                <i class="fas fa-search align-self-lg-center ps-3" aria-hidden="true"></i>
                <form action="/compare/get-pemeriksaan" method="GET" class="border-0 ps-3">
                    <input type="search" id="search-pemeriksaan" name="search-pemeriksaan" class="form-control border-0" aria-label="Search"  placeholder="Type No ISR here..." value="{{ request('search-pemeriksaan') }}">
                </form>   
            </div>
            <div class="card mb-4 mx-4">
                <div class="card-header pb-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Pemeriksaan</h5>
                        </div>
                    </div>
                </div>
                {{-- Table 2 --}}
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        @if (isset($microwaveLinkList))
                        <table class="table align-items-center mb-0">
                            <thead >
                                @if(count($microwaveLinkList) > 0)
                                    @foreach ($microwaveLinkList as $ml)
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Client Name</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->client_name }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Curr Lic Num</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->curr_lic_num }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Link Id</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->link_id }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Tanggal</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->tanggal }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Metode</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->metode }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">No Risalah Hasil</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->no_risalah_hasil }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Stn Name</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->stn_name }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Stasiun Lawan</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->stasiun_lawan }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">KOOR Long</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->koor_long }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">KOOR Lat</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->koor_lat }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">TX(mhz)</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->tx_mhz }}</p>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">RX(mhz)</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->rx_mhz }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">BW(mhz)</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->bw_mhz }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Merk Perangkat</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->merk_perangkat }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Sertifikat</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->sertifikat }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->status }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-bolder opacity-7">Keterangan</th>
                                        <td >
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->keterangan }}</p>
                                        </td>
                                    </tr>
                                </thead>
                                @endforeach
                            @endif
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection