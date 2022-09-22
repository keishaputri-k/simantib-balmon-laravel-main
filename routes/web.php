<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
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

	Route::get('penertiban', function () {
		return view('penertiban');
	})->name('penertiban');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('tv-digital', function () {
		return view("laravel-examples.tv-digital");
	})->name('tv-digital');

	Route::get('tv-analog', function () {
		return view("laravel-examples.tv-analog");
	})->name('tv-analog');

	Route::get('radio-fm', function () {
		return view('laravel-examples/radio-fm');
	})->name('radio-fm');

	Route::get('radio-am', function () {
		return view('laravel-examples.radio-am');
	})->name('radio-am');

	Route::get('microwave-link', function () {
		return view('laravel-examples.microwave-link');
	})->name('microwave-link');

	Route::get('stl', function () {
		return view('laravel-examples.stl');
	})->name('stl');

	Route::get('konsesi', function () {
		return view('laravel-examples.konsesi');
	})->name('konsesi');

    Route::get('penindakan', function () {
		return view('penindakan');
	})->name('penindakan');

	Route::get('penanganan-gangguan', function () {
		return view('penanganan-gangguan');
	})->name('penanganan-gangguan');

	Route::get('2-4ghz', function () {
		return view('kelas-izin.2-4ghz');
	})->name('2-4ghz');

	Route::get('pap5ghz', function () {
		return view('kelas-izin.pap5ghz');
	})->name('pap5ghz');

	Route::get('penyelenggara', function () {
		return view('penyelenggara');
	})->name('penyelenggara');

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