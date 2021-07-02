<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenilaiController;
use App\Http\Controllers\RealisasiController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'login']);
Route::get('/home/superadmin', [HomeController::class, 'superadmin']);
Route::get('/home/pegawai', [HomeController::class, 'pegawai']);
 
Route::get('/superadmin/pegawai', [PegawaiController::class, 'index']);
Route::get('/superadmin/pegawai/add', [PegawaiController::class, 'create']);
Route::post('/superadmin/pegawai/add', [PegawaiController::class, 'store']);
Route::get('/superadmin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/superadmin/pegawai/edit/{id}', [PegawaiController::class, 'update']);
Route::get('/superadmin/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);

Route::get('/superadmin/laporan/skp', [LaporanController::class, 's_skp']);
Route::get('/superadmin/laporan/skp/cetak', [LaporanController::class, 'cetakSkp']);
Route::get('/superadmin/laporan/pegawai', [LaporanController::class, 's_pegawai']);
Route::get('/superadmin/laporan/pegawai/cetak', [LaporanController::class, 'cetakpegawai']);
Route::get('/superadmin/laporan/skp/pegawai/cetak/{id}', [LaporanController::class, 'cetakSkpPegawai']);

Route::get('/pegawai/skp', [SkpController::class, 'index']);
Route::get('/pegawai/skp/add', [SkpController::class, 'create']);
Route::post('/pegawai/skp/add', [SkpController::class, 'store']);
Route::get('/pegawai/skp/edit/{id}', [SkpController::class, 'edit']);
Route::post('/pegawai/skp/edit/{id}', [SkpController::class, 'update']);
Route::get('/pegawai/skp/delete/{id}', [SkpController::class, 'destroy']);

Route::get('/pegawai/realisasi', [RealisasiController::class, 'index']);
Route::get('/pegawai/realisasi/isi/{id}', [RealisasiController::class, 'isi']);
Route::post('/pegawai/realisasi/isi/{id}', [RealisasiController::class, 'store']);
Route::get('/pegawai/realisasi/edit/{id}', [RealisasiController::class, 'edit']);
Route::post('/pegawai/realisasi/edit/{id}', [RealisasiController::class, 'update']);

Route::get('/pegawai/pejabat_penilai', [PenilaiController::class, 'index']);
Route::post('/pegawai/pejabat_penilai', [PenilaiController::class, 'update']);

Route::get('/pegawai/nilai', [NilaiController::class, 'index']);
Route::get('/pegawai/nilai/add', [NilaiController::class, 'create']);
Route::post('/pegawai/nilai/add', [NilaiController::class, 'store']);
Route::get('/pegawai/nilai/edit/{id}', [NilaiController::class, 'edit']);
Route::post('/pegawai/nilai/edit/{id}', [NilaiController::class, 'update']);
Route::get('/pegawai/nilai/delete/{id}', [NilaiController::class, 'destroy']);

Route::get('/pegawai/laporan', [LaporanController::class, 'index']);
Route::get('/pegawai/nilai/cetak/{id}', [LaporanController::class, 'cetak']);
Route::get('/logout', [LoginController::class, 'logout']);


