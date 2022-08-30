@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Radio AM</h5>
                        </div>
                        {{-- popup button --}}
                      <button type="button" class="btn btn-info btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">New Data</button>
                    </div>
                </div>
                {{-- popups edit --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Penertiban & Tindak Lanjut Entry Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form name="add-radio-am-post-form" id="add-radio-am-post-form" method="post" action="api/radioAm/create">
                                @csrf
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm">
                                                  <div class="row">
                                                    <div class="col-8 col-sm-6">
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Nama stasiun radio</label>
                                                            <input type="text" class="form-control" id="nama_stasiun_radio" name="nama_stasiun_radio">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Lokasi Pemancar</label>
                                                            <input type="text" class="form-control" id="lokasi_pemancar" name="lokasi_pemancar">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Frekuensi terukur mhz</label>
                                                            <input type="text" class="form-control" id="frekuensi_terukur_mhz" name="frekuensi_terukur_mhz">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Lokasi pemancar kecamatan</label>
                                                            <input type="text" class="form-control" id="lokasi_pemancar_kecamatan" name="lokasi_pemancar_kecamatan">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Kabupaten / kota</label>
                                                            <input type="text" class="form-control" id="kab_kota" name="kab_kota">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Provinsi</label>
                                                            <input type="text" class="form-control" id="provinsi" name="provinsi">
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">No spt</label>
                                                            <input type="text" class="form-control" id="no_spt" name="no_spt">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Tanggal spt</label>
                                                            <input type="text" class="form-control" id="tanggal_spt" name="tanggal_spt">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Kecamatan</label>
                                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Alamat</label>
                                                            <input type="text" class="form-control" id="alamat" name="alamat">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Latitude</label>
                                                            <input type="text" class="form-control" id="latitude" name="latitude">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Longitude</label>
                                                            <input type="text" class="form-control" id="longitude" name="longitude">
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
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
                                        Nama Stasiun Radio
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Lokasi Pemancar
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Frekuensi Pemancar MHZ
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Lokasi Pemancar Kecamatan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kab Kota
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Provinsi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No SPT
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal SPT
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kecamatan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Alamat
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Latitude 
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Longitude
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
                                   $ramList = DB::table('radio_a_m_s')->paginate(10); 
                                ?>
                                @foreach ($ramList as $ram)
                                    <tr>
                                        <td class="ps-4 text-xs-center font-weight-bold mb-0">{{ $ram->id }}</td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->nama_stasiun_radio}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->lokasi_pemancar}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->nama_stasiun_radio}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->lokasi_pemancar}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->frekuensi_terukur_mhz}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->lokasi_pemancar_kecamatan}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->kab_kota}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->provinsi}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->no_spt}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->tanggal_spt}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->kecamatan}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->alamat}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->latitude}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $ram->longitude}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            <span>
                                                <i class="cursor-pointer fas fa-trash text-secondary"></i>
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
                    {{$ramList->links()}}
                </ul>
            </nav>
        </div>
    </div>
</div>
 
@endsection