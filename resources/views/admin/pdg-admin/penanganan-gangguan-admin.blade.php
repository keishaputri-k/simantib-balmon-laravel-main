@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Penanganan Gangguan</h5>
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
                            <form name="add-penanganan-gangguan-post-form" id="add-penanganan-gangguan-post-form" method="post" action="api/penangananGangguan/create">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-8 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Upt</label>
                                                        <input type="text" class="form-control" id="upt" name="upt">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">No isr</label>
                                                        <input type="text" class="form-control" id="no_isr" name="no_isr">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">No surat pengaduan</label>
                                                        <input type="text" class="form-control" id="no_surat_pengaduan" name="no_surat_pengaduan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal surat pengaduan</label>
                                                        <input type="text" class="form-control" id="tgl_surat_pengaduan" name="tgl_surat_pengaduan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal terima surat pengaduan</label>
                                                        <input type="text" class="form-control" id="tgl_terima_surat_pengaduan" name="tgl_terima_surat_pengaduan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal spt pengukuran karakteristik frekuensi radio</label>
                                                        <input type="text" class="form-control" id="tgl_spt_pengukuran_karasteristik_frekuensi_radio" name="tgl_spt_pengukuran_karasteristik_frekuensi_radio">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Uraian kasus</label>
                                                        <input type="text" class="form-control" id="uraian_kasus" name="uraian_kasus">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Frekuensi terganggu</label>
                                                        <input type="text" class="form-control" id="frekuensi_terganggu" name="frekuensi_terganggu">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Servis</label>
                                                        <input type="text" class="form-control" id="servis" name="servis">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Pihak terganggu</label>
                                                        <input type="text" class="form-control" id="pihak_terganggu" name="pihak_terganggu">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Pihak pengganggu</label>
                                                        <input type="text" class="form-control" id="pihak_pengganggu" name="pihak_pengganggu">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Latitude pengganggu</label>
                                                        <input type="text" class="form-control" id="latitude_pengganggu" name="latitude_pengganggu">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Longitude pengganggu</label>
                                                        <input type="text" class="form-control" id="longitude_pengganggu" name="longitude_pengganggu">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Latitude terganggu</label>
                                                        <input type="text" class="form-control" id="latitude_terganggu" name="latitude_terganggu">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Longitude terganggu</label>
                                                        <input type="text" class="form-control" id="longitude_terganggu" name="longitude_terganggu">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal selesai aduan</label>
                                                        <input type="text" class="form-control" id="tanggal_selesai_aduan" name="tanggal_selesai_aduan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Status</label>
                                                        <input type="text" class="form-control" id="status" name="status">
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
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        UPT
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No ISR
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No Surat Pengaduan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Surat Pengaduan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Terima Surat Pengaduan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal SPT Karateristik Freq Radio
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Uraian Kasus
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Frekuensi Terganggu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Pihak Terganggu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Pihak Pengganggu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Latitude Penganggu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Longitude Penganggu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Latitude Terganggu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Longitude Terganggu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Keterangan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Selesai Aduan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tBody>
                                <?php
                                   $penangananGangguanList = DB::table('penanganan_gangguans')->paginate(10);
                                ?>
                                @foreach ($penangananGangguanList as $key => $pg )
                                    <tr>
                                        <td class="ps-4 text-xs-center font-weight-bold mb-0">{{ $pg->id}}</td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->upt }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->no_isr}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->no_surat_pengaduan }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->tgl_surat_pengaduan }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->tgl_terima_surat_pengaduan}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->tgl_spt_pengukuran_karasteristik_frekuensi_radio }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->uraian_kasus }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->frekuensi_terganggu }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->pihak_pengganggu }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->pihak_terganggu }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->latitude_pengganggu}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->longitude_pengganggu}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->latitude_terganggu}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->longitude_terganggu}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->keterangan}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->status}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $pg->tanggal_selesai_aduan}}</p>
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
                                                    <h5 class="modal-title" id="editModalLabel">Penertiban Data Edit</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="add-penanganan-gangguan-post-form" id="add-penanganan-gangguan-post-form" method="post" action="{{ url('api/penangananGangguan/update/'.$pg->id) }}">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-sm">
                                                                        <div class="row">
                                                                            <div class="col-8 col-sm-6">
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Upt</label>
                                                                                    <input type="text" class="form-control" id="upt" name="upt" value="{{ $pg->upt  }}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">No isr</label>
                                                                                    <input type="text" class="form-control" id="no_isr" name="no_isr" value="{{ $pg->no_isr}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">No surat pengaduan</label>
                                                                                    <input type="text" class="form-control" id="no_surat_pengaduan" name="no_surat_pengaduan" value="{{ $pg->no_surat_pengaduan}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Tanggal surat pengaduan</label>
                                                                                    <input type="text" class="form-control" id="tgl_surat_pengaduan" name="tgl_surat_pengaduan" value="{{ $pg->tgl_surat_pengaduan}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Tanggal terima surat pengaduan</label>
                                                                                    <input type="text" class="form-control" id="tgl_terima_surat_pengaduan" name="tgl_terima_surat_pengaduan" value="{{ $pg->tgl_terima_surat_pengaduan}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Tanggal spt pengukuran karakteristik frekuensi radio</label>
                                                                                    <input type="text" class="form-control" id="tgl_spt_pengukuran_karasteristik_frekuensi_radio" name="tgl_spt_pengukuran_karasteristik_frekuensi_radio" value="{{ $pg->tgl_spt_pengukuran_karasteristik_frekuensi_radio}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Uraian kasus</label>
                                                                                    <input type="text" class="form-control" id="uraian_kasus" name="uraian_kasus" value="{{ $pg->uraian_kasus}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Frekuensi terganggu</label>
                                                                                    <input type="text" class="form-control" id="frekuensi_terganggu" name="frekuensi_terganggu" value="{{ $pg->frekuensi_terganggu}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Servis</label>
                                                                                    <input type="text" class="form-control" id="servis" name="servis" value="{{ $pg->servis}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4 col-sm-6">
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Pihak terganggu</label>
                                                                                    <input type="text" class="form-control" id="pihak_terganggu" name="pihak_terganggu" value="{{ $pg->pihak_terganggu}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Pihak pengganggu</label>
                                                                                    <input type="text" class="form-control" id="pihak_pengganggu" name="pihak_pengganggu" value="{{ $pg->pihak_pengganggu}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Latitude pengganggu</label>
                                                                                    <input type="text" class="form-control" id="latitude_pengganggu" name="latitude_pengganggu" value="{{ $pg->latitude_pengganggu}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Longitude pengganggu</label>
                                                                                    <input type="text" class="form-control" id="longitude_pengganggu" name="longitude_pengganggu" value="{{ $pg->longitude_pengganggu}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Latitude terganggu</label>
                                                                                    <input type="text" class="form-control" id="latitude_terganggu" name="latitude_terganggu" value="{{ $pg->latitude_terganggu}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Longitude terganggu</label>
                                                                                    <input type="text" class="form-control" id="longitude_terganggu" name="longitude_terganggu" value="{{ $pg->longitude_terganggu}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Tanggal selesai aduan</label>
                                                                                    <input type="text" class="form-control" id="tanggal_selesai_aduan" name="tanggal_selesai_aduan" value="{{ $pg->tanggal_selesai_aduan}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Status</label>
                                                                                    <input type="text" class="form-control" id="status" name="status" value="{{ $pg->status}}">
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
                                            <span>
                                                <a class="cursor-pointer fas fa-trash text-secondary" href="{{ url('api/penangananGangguan/delete/'.$pg->id) }}"></a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tBody>
                        </table>    
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-info justify-content-end">
                    {{$penangananGangguanList->links()}}
                </ul>
            </nav>
        </div>
    </div>
</div>
 
@endsection