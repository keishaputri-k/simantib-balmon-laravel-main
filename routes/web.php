<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TestingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);

	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('comparation', function () {
		return view('comparation');
	})->name('comparation');

	Route::get('penertiban-admin', function () {
		return view('admin.pdg-admin.penertiban-admin');
	})->name('penertiban-admin');  

	Route::get('tv-digital-admin', function () {
		return view("admin.monitoring-admin.tv-digital-admin");
	})->name('tv-digital-admin');

	Route::get('tv-analog-admin', function () {
		return view("admin.monitoring-admin.tv-analog-admin");
	})->name('tv-analog-admin');

	Route::get('radio-fm-admin', function () {
		return view('admin.monitoring-admin.radio-fm-admin');
	})->name('radio-fm-admin');

	Route::get('radio-am-admin', function () {
		return view('admin.monitoring-admin.radio-am-admin');
	})->name('radio-am-admin');

	Route::get('microwave-link-admin', function () {
		return view('admin.monitoring-admin.microwave-link-admin');
	})->name('microwave-link-admin');

	Route::get('stl', function () {
		return view('laravel-examples.stl');
	})->name('stl');

	Route::get('konsesi', function () {
		return view('laravel-examples.konsesi');
	})->name('konsesi');

    Route::get('penindakan', function () {
		return view('penindakan');
	})->name('penindakan');

	Route::get('penanganan-gangguan-admin', function () {
		return view('admin.pdg-admin.penanganan-gangguan-admin');
	})->name('penanganan-gangguan-admin');

	Route::get('2-4ghz-admin', function () {
		return view('admin.kelas-izin-admin.2-4ghz-admin');
	})->name('2-4ghz-admin');

	Route::get('pap5ghz-admin', function () {
		return view('admin.kelas-izin-admin.pap5ghz-admin');
	})->name('pap5ghz-admin');

	Route::get('penyelenggara-admin', function () {
		return view('admin.penyelenggara-admin');
	})->name('penyelenggara-admin');

	//operator
	Route::get('penyelenggara-operator', function () {
		return view('operator.penyelenggara-operator');
	})->name('penyelenggara-operator');

	Route::get('tv-digital-operator', function () {
		return view("operator.monitoring-operator.tv-digital-operator");
	})->name('tv-digital-operator');

	Route::get('tv-analog-operator', function () {
		return view("operator.monitoring-operator.tv-analog-operator");
	})->name('tv-analog-operator');

	Route::get('radio-fm-operator', function () {
		return view('operator.monitoring-operator.radio-fm-operator');
	})->name('radio-fm-operator');

	Route::get('radio-am-operator', function () {
		return view('operator.monitoring-operator.radio-am-operator');
	})->name('radio-am-operator');

	Route::get('microwave-link-operator', function () {
		return view('operator.monitoring-operator.microwave-link-operator');
	})->name('microwave-link-operator');

	Route::get('penanganan-gangguan-operator', function () {
		return view('operator.pdg-operator.penanganan-gangguan-operator');
	})->name('penanganan-gangguan-operator');

	Route::get('penertiban-operator', function () {
		return view('operator.pdg-operator.penertiban-operator');
	})->name('penertiban-operator'); 

	Route::get('2-4ghz-operator', function () {
		return view('operator.kelas-izin-operator.2-4ghz-operator');
	})->name('2-4ghz-operator');

	Route::get('pap5ghz-operator', function () {
		return view('operator.kelas-izin-operator.pap5ghz-operator');
	})->name('pap5ghz-operator');

	//user
	Route::get('penyelenggara-user', function () {
		return view('user.penyelenggara-user');
	})->name('penyelenggara-user');

	Route::get('tv-digital-user', function () {
		return view("user.monitoring-user.tv-digital-user");
	})->name('tv-digital-user');

	Route::get('tv-analog-user', function () {
		return view("user.monitoring-user.tv-analog-user");
	})->name('tv-analog-user');

	Route::get('radio-fm-user', function () {
		return view('user.monitoring-user.radio-fm-user');
	})->name('radio-fm-user');

	Route::get('radio-am-user', function () {
		return view('user.monitoring-user.radio-am-user');
	})->name('radio-am-user');

	Route::get('microwave-link-user', function () {
		return view('user.monitoring-user.microwave-link-user');
	})->name('microwave-link-user');

	Route::get('penanganan-gangguan-user', function () {
		return view('user.png-user.penanganan-gangguan-user');
	})->name('penanganan-gangguan-user');

	Route::get('penertiban-user', function () {
		return view('user.png-user.penertiban-user');
	})->name('penertiban-user'); 

	Route::get('2-4ghz-user', function () {
		return view('user.kelas-izin-user.2-4ghz-user');
	})->name('2-4ghz-user');

	Route::get('pap5ghz-user', function () {
		return view('user.kelas-izin-user.pap5ghz-user');
	})->name('pap5ghz-user');

	Route::get('rhopf', function () {
		return view('rhopf');
	})->name('rhopf');

	Route::get('employee', function () {
		return view('employee');
	})->name('employee');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');


	
    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

//compare
Route::get('/compare/get-sims', [CompareController::class, 'readSimsCompare']);
Route::get('/compare/get-pemeriksaan', [CompareController::class, 'readPemeriksaanCompare']);

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

Route::get('/import_excel', 'ImportPenyelenggaraController@index');
Route::post('/import_penyelenggara/import', 'ImportPenyelenggaraController@import');
