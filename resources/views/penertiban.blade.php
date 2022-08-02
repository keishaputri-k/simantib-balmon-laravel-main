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
                                <form>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm">
                                              <div class="row">
                                                <div class="col-8 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Tanggal Observasi</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Nama Pengguna</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Frekuensi</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Dinas</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Sub Servis</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Jenis Pelanggaran</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Kabupaten / Kota</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tindakan</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Status</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal Operasi Stasiun</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">No ISR</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">No surat Penindakan</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal Upload</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Tanggal Penindakan</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Keterangan</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn bg-gradient-info">Confirm</button>
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
                                        Tanggal upload
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
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
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
                                <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">1</p>
                                  </td>
                                  <td>
                                      <div>
                                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Admin</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
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
                                <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">1</p>
                                  </td>
                                  <td>
                                      <div>
                                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Admin</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
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
                                <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">1</p>
                                  </td>
                                  <td>
                                      <div>
                                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Admin</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
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
                                <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">1</p>
                                  </td>
                                  <td>
                                      <div>
                                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                      </div>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Admin</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0"></p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
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
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div>
            {{-- Pagination --}}
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-info justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:;" tabindex="-1">
                        <em class="fa fa-angle-left"></em>
                        <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:;">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:;">
                            <em class="fa fa-angle-right"></em>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
 
@endsection