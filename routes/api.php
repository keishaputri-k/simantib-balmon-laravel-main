<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenangananGangguanController;
use App\Http\Controllers\PenyelenggaraController;
use App\Http\Controllers\PenertibanController;
use App\Http\Controllers\Pap2ghzController;
use App\Http\Controllers\Pap5ghzController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//pegawai
Route::get('pegawai/get', [PegawaiController::class, 'readPegawai']);
Route::get('pegawai/get/{id}', [PegawaiController::class, 'readIdPegawai']);
Route::post('pegawai/create', [PegawaiController::class, 'createPegawai']);
Route::post('pegawai/update/{id}', [PegawaiController::class, 'updatePegawai']);
Route::delete('pegawai/delete/{id}', [PegawaiController::class, 'deletePegawai']);

//penyelenggara
Route::get('penyelenggara/get', 'PenyelenggaraController@readPenyelenggara');
Route::get('penyelenggara/get/{id}', [PenyelenggaraController::class, 'readIdPenyelenggara']);
Route::post('penyelenggara/create', [PenyelenggaraController::class, 'createPenyelenggara']);
Route::post('penyelenggara/update/{id}', [PenyelenggaraController::class, 'updatePenyelenggara']);
Route::delete('penyelenggara/delete/{id}', [PenyelenggaraController::class, 'deletePenyelenggara']);

//TvDigital
Route::get('tvDigital/get', [TvDigitalController::class, 'readTvDigital']);
Route::get('tvDigital/get/{id}', [TvDigitalController::class, 'readIdTvDigital']);
Route::post('tvDigital/create', [TvDigitalController::class, 'createTvDigital']);
Route::post('tvDigital/update/{id}', [TvDigitalController::class, 'updateTvDigital']);
Route::delete('tvDigital/delete/{id}', [TvDigitalController::class, 'deleteTvDigital']);

//TvAnalog
Route::get('tvAnalog/get', [TvAnalogController::class, 'readTvAnalog']);
Route::get('tvAnalog/get/{id}', [TvAnalogController::class, 'readIdTvAnalog']);
Route::post('tvAnalog/create', [TvAnalogController::class, 'createTvAnalog']);
Route::post('tvAnalog/update/{id}', [TvAnalogController::class, 'updateTvAnalog']);
Route::delete('tvAnalog/delete/{id}', [TvAnalogController::class, 'deleteTvAnalog']);

//RadioFm
Route::get('radioFm/get', [RadioFmController::class, 'readRadioFm']);
Route::get('radioFm/get/{id}', [RadioFmController::class, 'readIdRadioFm']);
Route::post('radioFm/create', [RadioFmController::class, 'createRadioFm']);
Route::post('radioFm/update/{id}', [RadioFmController::class, 'updateRadioFm']);
Route::delete('radioFm/delete/{id}', [RadioFmController::class, 'deleteRadioFm']);

//RadioAm
Route::get('radioAm/get', [RadioAmController::class, 'readRadioAm']);
Route::get('radioAm/get/{id}', [RadioAmController::class, 'readIdRadioAm']);
Route::post('radioAm/create', [RadioAmController::class, 'createRadioAm']);
Route::post('radioAm/update/{id}', [RadioAmController::class, 'updateRadioAm']);
Route::delete('radioAm/delete/{id}', [RadioAmController::class, 'deleteRadioAm']);

//RHOPF
Route::get('rhopf/get', [RHOPFController::class, 'readRHOPF']);
Route::get('rhopf/get/{id}', [RHOPFController::class, 'readIdRHOPF']);
Route::post('rhopf/create', [RHOPFController::class, 'createRHOPF']);
Route::post('rhopf/update/{id}', [RHOPFController::class, 'updateRHOPF']);
Route::delete('rhopf/delete/{id}', [RHOPFController::class, 'deleteRHOPF']);

//Penertiban
Route::get('penertiban/get', [PenertibanController::class, 'readPenertiban']);
Route::get('penertiban/get/{id}', [PenertibanController::class, 'readIdPenertiban']);
Route::post('penertiban/create', [PenertibanController::class, 'createPenertiban']);
Route::post('penertiban/update/{id}', [PenertibanController::class, 'updatePenertiban']);
Route::delete('penertiban/delete/{id}', [PenertibanController::class, 'deletePenertiban']);

//Penanganan Gangguan
Route::get('penangananGangguan/get', [PenangananGangguanController::class, 'readPenangananGangguan']);
Route::get('penangananGangguan/get/{id}', [PenangananGangguanController::class, 'readIdPenangananGangguan']);
Route::post('penangananGangguan/create', [PenangananGangguanController::class, 'createPenangananGangguan']);
Route::post('penangananGangguan/update/{id}', [PenangananGangguanController::class, 'updatePenangananGangguan']);
Route::delete('penangananGangguan/delete/{id}', [PenangananGangguanController::class, 'deletePenangananGangguan']);

//Pap2ghz
Route::get('pap2ghz/get', [Pap2ghzController::class, 'readPap2ghz']);
Route::get('pap2ghz/get/{id}', [Pap2ghzController::class, 'readIdPap2ghz']);
Route::post('pap2ghz/create', [Pap2ghzController::class, 'createPap2ghz']);
Route::post('pap2ghz/update/{id}', [Pap2ghzController::class, 'updatePap2ghz']);
Route::delete('pap2ghz/delete/{id}', [Pap2ghzController::class, 'deletePap2ghz']);

//Pap5ghz
Route::get('pap5ghz/get', [Pap5ghzController::class, 'readPap5ghz']);
Route::get('pap5ghz/get/{id}', [Pap5ghzController::class, 'readIdPap5ghz']);
Route::post('pap5ghz/create', [Pap5ghzController::class, 'createPap5ghz']);
Route::post('pap5ghz/update/{id}', [Pap5ghzController::class, 'updatePap5ghz']);
Route::delete('pap5ghz/delete/{id}', [Pap5ghzController::class, 'deletePap5ghz']);
