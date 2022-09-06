@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <strong>Data tidak Sesuai!</strong> 
        </div>
        <div class="col-lg-6 mb-lg-0 mb-3">
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
                        <table class="table align-items-center mb-0">
                            <thead >
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">No ISR</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">02556936-000SU/2620222027</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Link ID</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">13787139</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">STN Name</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">01PPR002-PARI</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">STN Lawan</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">02TGN099-TELUK_NAGA</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Koor Long</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">106.62155</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Koor Lat</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">-5.85722222</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Tx (MHz)</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">6960</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Rx (MHz)</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">6620</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">BW (MHz)</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">40000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Merk/Type Perangkat</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">ZTE ZXMW HRU3D 6G</p>
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
                                <tr> 
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                    <td>
                                        <a href="#" class="mx-0" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Pagination --}}
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-info justify-content-end">
                   
                </ul>
            </nav>
        </div>

        <div class="col-lg-6">
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
                        <table class="table align-items-center mb-0">
                            <thead >
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">STN Name</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">01PPR002-PARI</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">STN Lawan</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">02TGN099-TELUK_NAGA</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Koor Long</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">106.62155</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Koor Lat</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">-5.85722222</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Tx (MHz)</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">6960</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Rx (MHz)</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">6620</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">BW (MHz)</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">40000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Merk/Type Perangkat</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">ZTE ZXMW HRU3D 6G</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Sertifikat Perangkat</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">Ada</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                                    <td >
                                        <p class="text-xs font-weight-bold mb-0">Sesuai ISR</p>
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
                                <tr> 
                                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                    <td>
                                        <a href="#" class="mx-0" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Pagination --}}
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-info justify-content-end">
                    
                </ul>
            </nav>
        </div>
    </div>
</div>
 
@endsection