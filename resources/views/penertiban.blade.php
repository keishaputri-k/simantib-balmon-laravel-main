@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Penertiban & Tindak Lanjut</h5>
                        </div>
                        {{-- popup button --}}
                        <button type="button" class="btn btn-info btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">New Data</button>
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
                                <form name="add-penertiban-post-form" id="add-penertiban-post-form" method="post" action="api/penertiban/create">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm">
                                              <div class="row">
                                                <div class="col-8 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Tanggal Observasi</label>
                                                        <input type="text" class="form-control" id="tgl_observasi" name="tgl_observasi">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Nama Pengguna</label>
                                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Frekuensi</label>
                                                        <input type="text" class="form-control" id="frekuensi" name="frekuensi">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Dinas</label>
                                                        <input type="text" class="form-control" id="subservice" name="subservice">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Sub Servis</label>
                                                        <input type="text" class="form-control" id="dinas" name="dinas">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Jenis Pelanggaran</label>
                                                        <input type="text" class="form-control" id="jenis_pelanggaran" name="jenis_pelanggaran">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Kabupaten / Kota</label>
                                                        <input type="text" class="form-control" id="kab_kota" name="kab_kota">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tindakan</label>
                                                        <input type="text" class="form-control" id="tindakan" name="tindakan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Status</label>
                                                        <input type="text" class="form-control" id="status" name="status">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal Operasi Stasiun</label>
                                                        <input type="text" class="form-control" id="tgl_operasi_stasiun" name="tgl_operasi_stasiun">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">No ISR</label>
                                                        <input type="text" class="form-control" id="no_isr" name="no_isr">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">No surat Penindakan</label>
                                                        <input type="text" class="form-control" id="no_surat_penindakan" name="no_surat_penindakan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal Penindakan</label>
                                                        <input type="text" class="form-control" id="tgl_penindakan" name="tgl_penindakan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Keterangan</label>
                                                        <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
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
                </div>
                {{-- card table --}}
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tanggal Observasi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Pengguna
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Frekuensi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Dinas
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sub Servis
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Pelanggaran
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kabupaten / kota
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tindakan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Operasi Stasiun
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No ISR
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No Surat Penindakan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Penindakan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Keterangan
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
                                   $penertibanList = DB::table('penertibans')->paginate(10);
                                ?>
                                @foreach ($penertibanList as $penertiban)
                                <tr>
                                    <td class="ps-4 text-xs-center font-weight-bold mb-0">{{ $penertiban->id }}</td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->tgl_observasi}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->nama_pengguna}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->frekuensi}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->dinas}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->subservice}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->jenis_pelanggaran}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->kab_kota}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->tindakan}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->status}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->tgl_operasi_stasiun}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->no_isr}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->no_surat_penindakan}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->tgl_penindakan}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $penertiban->keterangan}}</p>
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
                    {{$penertibanList->links()}}
                </ul>
            </nav>
        </div>
    </div>
</div>
 
@endsection