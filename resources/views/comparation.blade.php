@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        {{-- <div class="alert alert-danger" role="alert">
            <strong>Data tidak Sesuai!</strong> 
        </div> --}}
        <div class="col-lg-6 mb-lg-0 mb-3 ">
            {{-- Search ISR SIMS --}}
            <div class="bg-white border-radius-lg d-inline-flex  mb-3">
                <i class="fas fa-search align-self-lg-center ps-3" aria-hidden="true"></i>
                <div class="border-0 ps-3">
                        <input class="form-control border-0"  placeholder="Type No ISR here..." aria-label="search" name="searchA" id="searchA">
                </div>
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
                        <table class="table align-items-center mb-0">
                            <tbody id="tabelA">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            {{-- Search ISR Pemeriksaan --}}
            <div class="bg-white border-radius-lg d-inline-flex  mb-3">
                <i class="fas fa-search align-self-lg-center ps-3" aria-hidden="true"></i>
                {{-- <form action="/compare/get-pemeriksaan" method="GET" class="border-0 ps-3">
                    <input type="search" id="search-pemeriksaan" name="search-pemeriksaan" class="form-control border-0" aria-label="Search"  placeholder="Type No ISR here..." value="{{ request('search-pemeriksaan') }}">
                </form>    --}}
                <div class="border-0 ps-3">
                        <input class="form-control border-0"  placeholder="Type No ISR here..." aria-label="search" name="searchB" id="searchB">
                </div>
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
                        <table class="table align-items-center mb-0">
                            <tbody id="tabelB">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <button class="btn bg-gradient-info my-1 me-1">Compare</button> --}}
    </div>
</div>
 
@endsection