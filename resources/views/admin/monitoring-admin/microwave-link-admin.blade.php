@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Microwave Link</h5>
                        </div>
                      {{-- popup button --}}
                        <div class="">
                            <button type="button" class="btn btn-info btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">New Data</button>
                        </div>
                    </div>
                </div>
                {{-- popups new data edit --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Penertiban & Tindak Lanjut Entry Data</h5>
                        </div>
                        <div class="modal-body">
                            <form name="add-microwave-link-form" id="add-microwave-link-form" method="POST" action="api/microwaveLink/create">
                                @csrf
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-8 col-sm-6">
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Client Name</label>
                                                <input type="text" class="form-control" id="client_name" name="client_name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Curr Lic Num</label>
                                                <input type="text" class="form-control" id="curr_lic_num" name="curr_lic_num">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Link Id</label>
                                                <input type="text" class="form-control" id="link_id" name="link_id">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Tanggal</label>
                                                <input type="text" class="form-control" id="tanggal" name="tanggal">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Metode</label>
                                                <input type="text" class="form-control" id="metode" name="metode">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">No risalah hasil</label>
                                                <input type="text" class="form-control" id="no_risalah_hasil" name="no_risalah_hasil">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Stn name</label>
                                                <input type="text" class="form-control" id="stn_name" name="stn_name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Stasiun lawan</label>
                                                <input type="text" class="form-control" id="stasiun_lawan" name="stasiun_lawan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Koor long</label>
                                                <input type="text" class="form-control" id="koor_long" name="koor_long">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Koor lat</label>
                                                <input type="text" class="form-control" id="koor_lat" name="koor_lat">
                                            </div>
                                        </div>
                                        <div class="col-4 col-sm-6">
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Tx mhz</label>
                                                <input type="text" class="form-control" id="tx_mhz" name="tx_mhz">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Rx mhz</label>
                                                <input type="text" class="form-control" id="rx_mhz" name="rx_mhz">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Bw mhz</label>
                                                <input type="text" class="form-control" id="bw_mhz" name="bw_mhz">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Merk perangkat</label>
                                                <input type="text" class="form-control" id="merk_perangkat" name="merk_perangkat">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Sertifikat</label>
                                                <input type="text" class="form-control" id="sertifikat" name="sertifikat">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Status</label>
                                                <input type="text" class="form-control" id="status" name="status">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn bg-gradient-info">Confirm</button>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Client Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Curr Lic Num
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Link Id
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        tanggal
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        metode
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        no_risalah_hasil
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        stn_name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        stasiun_lawan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        koor_long
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        koor_lat
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        tx_mhz
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        rx_mhz
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        bw_mhz
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        merk_perangkat
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        sertifikat
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        keterangan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $mlList = DB::table('microwave_links')->paginate(10); 
                                   $i = 1;
                                ?>
                                @foreach ($mlList as $key =>  $ml)
                                    <tr>
                                        <td class="ps-4 text-xs-center font-weight-bold mb-0">{{ $i++ }}</td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->client_name}}</p>
                                        </td> 
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->curr_lic_num}}</p>
                                        </td> 
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->link_id}}</p>
                                        </td> 
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->tanggal}}</p>
                                        </td> 
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->metode}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->no_risalah_hasil}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->stn_name}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->stasiun_lawan}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->koor_long}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->koor_lat}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->tx_mhz}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->rx_mhz}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->bw_mhz}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->merk_perangkat}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->sertifikat}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->status}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ml->keterangan}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-center">
                                            <a class="fas fa-user-edit text-secondary mx-3" data-bs-toggle="modal" data-bs-original-title="Edit user" data-bs-target="#editModal{{ $key }}" data-bs-whatever="@getbootstrap"></a>
                                            {{-- popups update --}}
                                            <div class="modal fade" id="editModal{{ $key }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content ">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Tv Analog Data Edit</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="add-microwave-link-form" id="add-microwave-link-form" method="POST" action="{{ url('api/microwaveLink/update/'.$ml->id)}}">
                                                            @csrf
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-8 col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Client Name</label>
                                                                            <input type="text" class="form-control" id="client_name" name="client_name">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Curr Lic Num</label>
                                                                            <input type="text" class="form-control" id="curr_lic_num" name="curr_lic_num">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Link Id</label>
                                                                            <input type="text" class="form-control" id="link_id" name="link_id">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Tanggal</label>
                                                                            <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $ml->tanggal}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Metode</label>
                                                                            <input type="text" class="form-control" id="metode" name="metode" value="{{ $ml->metode}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">No risalah hasil</label>
                                                                            <input type="text" class="form-control" id="no_risalah_hasil" name="no_risalah_hasil" value="{{ $ml->no_risalah_hasil}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Stn name</label>
                                                                            <input type="text" class="form-control" id="stn_name" name="stn_name" value="{{ $ml->stn_name}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Stasiun lawan</label>
                                                                            <input type="text" class="form-control" id="stasiun_lawan" name="stasiun_lawan" value="{{ $ml->stasiun_lawan}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Koor long</label>
                                                                            <input type="text" class="form-control" id="koor_long" name="koor_long" value="{{ $ml->koor_long}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Koor lat</label>
                                                                            <input type="text" class="form-control" id="koor_lat" name="koor_lat" value="{{ $ml->koor_lat}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4 col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Tx mhz</label>
                                                                            <input type="text" class="form-control" id="tx_mhz" name="tx_mhz" value="{{ $ml->tx_mhz}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Rx mhz</label>
                                                                            <input type="text" class="form-control" id="rx_mhz" name="rx_mhz" value="{{ $ml->rx_mhz}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Bw mhz</label>
                                                                            <input type="text" class="form-control" id="bw_mhz" name="bw_mhz" value="{{ $ml->bw_mhz}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Merk perangkat</label>
                                                                            <input type="text" class="form-control" id="merk_perangkat" name="merk_perangkat" value="{{ $ml->merk_perangkat}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Sertifikat</label>
                                                                            <input type="text" class="form-control" id="sertifikat" name="sertifikat" value="{{ $ml->sertifikat}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Status</label>
                                                                            <input type="text" class="form-control" id="status" name="status" value="{{ $ml->status}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Keterangan</label>
                                                                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $ml->keterangan}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn bg-gradient-info">Confirm</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <span>
                                                <a class="cursor-pointer fas fa-trash text-secondary" href="{{ url('api/microwaveLink/delete/'.$ml->id) }}"></a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
             {{-- Pagination --}}
             <nav aria-label="Page navigation example">
                <ul class="pagination pagination-info justify-content-end">
                    {{$mlList->links()}}
                </ul>
            </nav>
        </div>
    </div>
</div>
 
@endsection