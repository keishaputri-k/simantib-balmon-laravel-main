@extends('layouts.user_type.auth')

@section('content')

<div>
    //analog
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tv Analog</h5>
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
                          <h5 class="modal-title" id="exampleModalLabel">Tv Analog Entry Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form name="add-tv-analog-post-form" id="add-tv-analog-post-form" method="POST" action="api/tvAnalog/create">
                                @csrf
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm">
                                          <div class="row">
                                            <div class="col-8 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">No spt</label>
                                                    <input type="text" class="form-control" id="no_spt" name="no_spt">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Tanggal Pelaksanaan</label>
                                                    <input type="text" class="form-control" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Penyelenggara Layanan</label>
                                                    <input type="text" class="form-control" id="penyelenggara_layanan" name="penyelenggara_layanan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Kanal</label>
                                                    <input type="text" class="form-control" id="kanal" name="kanal">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Status</label>
                                                    <input type="text" class="form-control" id="status" name="status">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Frekuensi</label>
                                                    <input type="text" class="form-control" id="frekuensi" name="frekuensi">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Level</label>
                                                    <input type="text" class="form-control" id="level" name="level">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Bandwidth</label>
                                                    <input type="text" class="form-control" id="bandwidth" name="bandwidth">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Code rate</label>
                                                    <input type="text" class="form-control" id="code_rate" name="code_rate">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Guard interval</label>
                                                    <input type="text" class="form-control" id="guard_interval" name="guard_interval">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 1</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_1" name="Program_penyelenggaraan_1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 1</label>
                                                    <input type="text" class="form-control" id="program_standar_1" name="program_standar_1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 2</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_2" name="Program_penyelenggaraan_2">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 2</label>
                                                    <input type="text" class="form-control" id="program_standar_2" name="program_standar_2">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 3</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_3" name="Program_penyelenggaraan_3">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 3</label>
                                                    <input type="text" class="form-control" id="program_standar_3" name="program_standar_3">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 4</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_4" name="Program_penyelenggaraan_4">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 4</label>
                                                    <input type="text" class="form-control" id="program_standar_4" name="program_standar_4">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 5</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_5" name="Program_penyelenggaraan_5">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 5</label>
                                                    <input type="text" class="form-control" id="program_standar_5" name="program_standar_5">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 6</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_6" name="Program_penyelenggaraan_6">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 6</label>
                                                    <input type="text" class="form-control" id="program_standar_6" name="program_standar_6">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 7</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_7" name="Program_penyelenggaraan_7">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 7</label>
                                                    <input type="text" class="form-control" id="program_standar_7" name="program_standar_7">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 8</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_8" name="Program_penyelenggaraan_8">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 8</label>
                                                    <input type="text" class="form-control" id="program_standar_8" name="program_standar_8">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 9</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_9" name="Program_penyelenggaraan_9">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 9</label>
                                                    <input type="text" class="form-control" id="program_standar_9" name="program_standar_9">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 10</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_10" name="Program_penyelenggaraan_10">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 10</label>
                                                    <input type="text" class="form-control" id="program_standar_10" name="program_standar_10">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 11</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_11" name="Program_penyelenggaraan_11">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 11</label>
                                                    <input type="text" class="form-control" id="program_standar_11" name="program_standar_11">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program penyelenggaraan 12</label>
                                                    <input type="text" class="form-control" id="Program_penyelenggaraan_12" name="Program_penyelenggaraan_12">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Program standar 12</label>
                                                    <input type="text" class="form-control" id="program_standar_12" name="program_standar_12">
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
                                        Alamat
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nomor SPT
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Pelaksanaan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Penyelenggara Layanan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kanal
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        frekuensi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        level
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        bandwidth
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        code rate
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        guard interval
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 1
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 1
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 2
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 2
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 3
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 3
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 4
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 4
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 5
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 5
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 6
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 6
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 7
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 7
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 8
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 8
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 9
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 9
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 10
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 10
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 11
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 11
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Penyelenggaraan 12
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Program Standar 12
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
                                $tvAnalogList = DB::table('tv_analogs')->paginate(10);
                                ?>
                                @foreach ($tvAnalogList as $key => $tvAnalog)
                                <tr>
                                    <td class="ps-4 text-xs-center font-weight-bold mb-0">{{ $tvAnalog->id}}</td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->alamat}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->no_spt }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->tanggal_pelaksanaan }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->penyelenggara_layanan }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->kanal }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->status}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->frekuensi}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->level }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->bandwidth }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->code_rate }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->guard_interval}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_1 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_1 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_2 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_2 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_3 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_3 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_4 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_4 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_5 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_5 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_6 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_6 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_7}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_7 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_8 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_8 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_9 }}</p>
                                    </td><td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_9 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_10 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_10 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_11 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_11 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->Program_penyelenggaraan_12 }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $tvAnalog->program_standar_12 }}</p>
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
                                                        <form name="add-tv-analog-post-form" id="add-tv-analog-post-form" method="post" action="{{ url('api/tvAnalog/update/'.$tvAnalog->id)}}">
                                                            @csrf
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-sm">
                                                                      <div class="row">
                                                                        <div class="col-8 col-sm-6">
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Alamat</label>
                                                                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $tvAnalog->alamat}}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">No spt</label>
                                                                                <input type="text" class="form-control" id="no_spt" name="no_spt" value="{{ $tvAnalog->no_spt }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Tanggal Pelaksanaan</label>
                                                                                <input type="text" class="form-control" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan" value="{{ $tvAnalog->tanggal_pelaksanaan }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Penyelenggara Layanan</label>
                                                                                <input type="text" class="form-control" id="penyelenggara_layanan" name="penyelenggara_layanan" value="{{ $tvAnalog->penyelenggara_layanan }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Kanal</label>
                                                                                <input type="text" class="form-control" id="kanal" name="kanal" value="{{ $tvAnalog->kanal }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Status</label>
                                                                                <input type="text" class="form-control" id="status" name="status" value="{{ $tvAnalog->status }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Frekuensi</label>
                                                                                <input type="text" class="form-control" id="frekuensi" name="frekuensi" value="{{ $tvAnalog->frekuensi }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Level</label>
                                                                                <input type="text" class="form-control" id="level" name="level" value="{{ $tvAnalog->level }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Bandwidth</label>
                                                                                <input type="text" class="form-control" id="bandwidth" name="bandwidth" value="{{ $tvAnalog->bandwidth }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Code rate</label>
                                                                                <input type="text" class="form-control" id="code_rate" name="code_rate" value="{{ $tvAnalog->code_rate }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Guard interval</label>
                                                                                <input type="text" class="form-control" id="guard_interval" name="guard_interval" value="{{ $tvAnalog->guard_interval }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 col-sm-6">
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 1</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_1" name="Program_penyelenggaraan_1" value="{{ $tvAnalog->Program_penyelenggaraan_1 }}" >
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 1</label>
                                                                                <input type="text" class="form-control" id="program_standar_1" name="program_standar_1" value="{{ $tvAnalog->program_standar_1 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 2</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_2" name="Program_penyelenggaraan_2" value="{{ $tvAnalog->Program_penyelenggaraan_2 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 2</label>
                                                                                <input type="text" class="form-control" id="program_standar_2" name="program_standar_2" value="{{ $tvAnalog->program_standar_2 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 3</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_3" name="Program_penyelenggaraan_3" value="{{ $tvAnalog->Program_penyelenggaraan_3 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 3</label>
                                                                                <input type="text" class="form-control" id="program_standar_3" name="program_standar_3" value="{{ $tvAnalog->program_standar_3 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 4</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_4" name="Program_penyelenggaraan_4" value="{{ $tvAnalog->Program_penyelenggaraan_4 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 4</label>
                                                                                <input type="text" class="form-control" id="program_standar_4" name="program_standar_4" value="{{ $tvAnalog->program_standar_4 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 5</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_5" name="Program_penyelenggaraan_5" value="{{ $tvAnalog->Program_penyelenggaraan_5 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 5</label>
                                                                                <input type="text" class="form-control" id="program_standar_5" name="program_standar_5" value="{{ $tvAnalog->program_standar_5 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 6</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_6" name="Program_penyelenggaraan_6" value="{{ $tvAnalog->Program_penyelenggaraan_6 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 6</label>
                                                                                <input type="text" class="form-control" id="program_standar_6" name="program_standar_6" value="{{ $tvAnalog->program_standar_6 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 7</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_7" name="Program_penyelenggaraan_7" value="{{ $tvAnalog->Program_penyelenggaraan_7 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 7</label>
                                                                                <input type="text" class="form-control" id="program_standar_7" name="program_standar_7" value="{{ $tvAnalog->program_standar_7 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 8</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_8" name="Program_penyelenggaraan_8" value="{{ $tvAnalog->Program_penyelenggaraan_8 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 8</label>
                                                                                <input type="text" class="form-control" id="program_standar_8" name="program_standar_8" value="{{ $tvAnalog->program_standar_8 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 9</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_9" name="Program_penyelenggaraan_9" value="{{ $tvAnalog->Program_penyelenggaraan_9 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 9</label>
                                                                                <input type="text" class="form-control" id="program_standar_9" name="program_standar_9" value="{{ $tvAnalog->program_standar_9 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 10</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_10" name="Program_penyelenggaraan_10" value="{{ $tvAnalog->Program_penyelenggaraan_10 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 10</label>
                                                                                <input type="text" class="form-control" id="program_standar_10" name="program_standar_10" value="{{ $tvAnalog->program_standar_10 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 11</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_11" name="Program_penyelenggaraan_11" value="{{ $tvAnalog->Program_penyelenggaraan_11 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 11</label>
                                                                                <input type="text" class="form-control" id="program_standar_11" name="program_standar_11" value="{{ $tvAnalog->program_standar_11 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program penyelenggaraan 12</label>
                                                                                <input type="text" class="form-control" id="Program_penyelenggaraan_12" name="Program_penyelenggaraan_12" value="{{ $tvAnalog->Program_penyelenggaraan_12 }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Program standar 12</label>
                                                                                <input type="text" class="form-control" id="program_standar_12" name="program_standar_12" value="{{ $tvAnalog->program_standar_12 }}">
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
                                            <a class="cursor-pointer fas fa-trash text-secondary" href="{{ url('api/tvAnalog/delete/'.$tvAnalog->id) }}"></a>
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
                    {{$tvAnalogList->links()}}
                </ul>
            </nav>
        </div>
    </div>
</div>
 
@endsection