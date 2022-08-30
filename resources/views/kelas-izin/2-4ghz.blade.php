@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Perangkat Access Point 2,4ghz</h5>
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
                          <h5 class="modal-title" id="exampleModalLabel">2,4 Ghz Data Entry</h5>
                        </div>
                        <div class="modal-body">
                            <form name="add-pap2ghz-post-form" id="add-pap2ghz-post-form" method="POST" action="api/pap2ghz/create">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-8 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal</label>
                                                        <input type="text" class="form-control" id="tanggal" name="tanggal">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Alamat lokasi perangkat pemancar</label>
                                                        <input type="text" class="form-control" id="alamat_lokasi_perangkat_pemancar" name="alamat_lokasi_perangkat_pemancar">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Koor perangkat latitude</label>
                                                        <input type="text" class="form-control" id="koor_perangkat_lantitude" name="koor_perangkat_lantitude">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Koor perangkat longitude</label>
                                                        <input type="text" class="form-control" id="koor_perangkat_longitude" name="koor_perangkat_longitude">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Frekuensi</label>
                                                        <input type="text" class="form-control" id="frekuensi" name="frekuensi">
                                                    </div>
                                                </div>
                                                    <div class="col-4 col-sm-6"> 
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Merk perangkat</label>
                                                            <input type="text" class="form-control" id="merk_perangkat" name="merk_perangkat">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Tipe Perangkat</label>
                                                            <input type="text" class="form-control" id="tipe_perangkat" name="tipe_perangkat">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Pic nama</label>
                                                            <input type="text" class="form-control" id="pic_nama" name="pic_nama">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Pic no telpon</label>
                                                            <input type="text" class="form-control" id="pic_no_tlp" name="pic_no_tlp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Pic email</label>
                                                            <input type="text" class="form-control" id="pic_email" name="pic_email">
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
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Alamat Lokasi Perangkat Pemancar
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Koordinat Perangkat Pemancar Latitude
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Koordinat Perangkat Pemancar Longitude
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Frekuensi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Merk
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tipe Perangkat 
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        PIC Nama
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        PIC No Telpon
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        PIC email
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
                                $pap2ghzList = DB::table('pap2ghzs')->paginate(10);
                                ?>
                                @foreach ($pap2ghzList as $pap2ghz)
                                    <tr>
                                        <td class="ps-4 text-xs-center font-weight-bold mb-0">{{ $pap2ghz->id}}</td>
                                     
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->tanggal }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->alamat_lokasi_perangkat_pemancar}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->koor_perangkat_lantitude }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->koor_perangkat_longitude }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->frekuensi }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->merk_perangkat }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->tipe_perangkat }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->pic_nama }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->pic_no_tlp }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pap2ghz->pic_email}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            <span>
                                                <i class="cursor-pointer fas fa-trash text-secondary" ></i>
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
                    {{$pap2ghzList->links()}}
                </ul>
            </nav>
        </div>
    </div>
</div>
 
@endsection