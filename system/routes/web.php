<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\Visi_misiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\KolaborasiController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
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

Route::get('admin/beranda', [BerandaController::class, 'index']);

// Kelas
Route::get('admin/ruang-kelas', [KelasController::class, 'index']);
Route::post('admin/ruang-kelas', [KelasController::class, 'simpan']);
Route::put('admin/ruang-kelas/{kelas}', [KelasController::class, 'edit']);
Route::delete('admin/ruang-kelas/{kelas}', [KelasController::class, 'hapus']);
// End Kelas

// Siswa
Route::post('admin/siswa', [SiswaController::class, 'simpan']);
Route::put('admin/siswa/{siswa}', [SiswaController::class, 'edit']);
Route::delete('admin/siswa/{siswa}',[SiswaController::class, 'hapus']);
Route::get('admin/siswa/kelas-1', [SiswaController::class, 'kelas1']);
Route::get('admin/siswa/kelas-2', [SiswaController::class, 'kelas2']);
Route::get('admin/siswa/kelas-3', [SiswaController::class, 'kelas3']);
Route::get('admin/siswa/kelas-4', [SiswaController::class, 'kelas4']);
Route::get('admin/siswa/kelas-5', [SiswaController::class, 'kelas5']);
Route::get('admin/siswa/kelas-6', [SiswaController::class, 'kelas6']);
// End Siswa

// Guru
Route::get('admin/guru',[GuruController::class,'index']);
Route::post('admin/guru',[GuruController::class, 'simpan']);
Route::put('admin/guru/{guru}', [GuruController::class, 'edit']);
Route::delete('admin/guru/{guru}',[GuruController::class,'hapus']);
// End Guru

//Alumni
Route::get('admin/alumni',[SiswaController::class,'alumni']);
//End Alumni

//Informasi
Route::get('admin/sejarah',[SejarahController::class,'sejarah']);
Route::post('admin/sejarah',[SejarahController::class,'simpan']);
Route::delete('admin/sejarah/{sejarah}',[SejarahController::class,'hapus']);

Route::get('admin/struktur',[StrukturController::class,'struktur']);
Route::post('admin/struktur',[StrukturController::class,'simpan']);
Route::delete('admin/struktur/{struktur}',[StrukturController::class,'hapus']);

Route::get('admin/visi_misi',[Visi_misiController::class,'visi_misi']);
Route::post('admin/visi_misi',[Visi_misiController::class,'simpan']);
Route::delete('admin/visi_misi/{visi_misi}',[Visi_misiController::class,'hapus']);

Route::get('admin/prestasi',[PrestasiController::class,'prestasi']);
Route::post('admin/prestasi',[PrestasiController::class,'simpan']);
Route::put('admin/prestasi/{prestasi}',[PrestasiController::class,'edit']);
Route::delete('admin/prestasi/{prestasi}',[PrestasiController::class,'hapus']);

Route::get('admin/kolaborasi',[KolaborasiController::class,'kolaborasi']);
Route::post('admin/kolaborasi',[KolaborasiController::class,'simpan']);
Route::put('admin/kolaborasi/{kolaborasi}',[KolaborasiController::class,'edit']);
Route::delete('admin/kolaborasi/{kolaborasi}',[KolaborasiController::class,'hapus']);

Route::get('admin/lomba',[LombaController::class,'lomba']);
Route::post('admin/lomba',[LombaController::class,'simpan']);
Route::put('admin/lomba/{lomba}',[LombaController::class,'edit']);
Route::delete('admin/lomba/{lomba}',[LombaController::class,'hapus']);
//End Informasi

//User
Route::get('admin/user',[UserController::class,'index']);
Route::post('admin/user',[UserController::class,'simpan']);
Route::put('admin/user/{user}',[UserController::class,'edit']);
Route::delete('admin/user/{user}',[UserController::class,'hapus']);
//End User

//Login
Route::get('Client/login',[AuthController::class, 'showlogin']);
Route::post('Client/login',[AuthController::class, 'loginprocess']);
Route::get('Client/logout',[AuthController::class, 'logout']);
//End Login
Route::get('Client/beranda', [HomeController::class, 'showberanda']);
Route::get('Client/statistik_siswa', [HomeController::class, 'showstatistik_siswa']);
Route::get('Client/statistik_guru', [HomeController::class, 'showstatistik_guru']);
Route::get('Client/sejarah', [HomeController::class, 'showsejarah']);
Route::get('Client/struktur', [HomeController::class, 'showstruktur']);
Route::get('Client/visi_misi', [HomeController::class, 'showvisi_misi']);
Route::get('Client/prestasi', [HomeController::class, 'showprestasi']);
Route::get('Client/kolaborasi', [HomeController::class, 'showkolaborasi']);
Route::get('Client/lomba', [HomeController::class, 'showlomba']);

Route::get('Client/alumni', [HomeController::class, 'showalumni']);
Route::post('Client/alumni', [HomeController::class, 'cariAlumni']);

Route::get('Client/siswakelas_1',[HomeController::class, 'showsiswakelas_1']);
Route::post('Client/siswakelas_1', [HomeController::class, 'cariKelas1']);

Route::get('Client/siswakelas_2',[HomeController::class, 'showsiswakelas_2']);
Route::post('Client/siswakelas_2', [HomeController::class, 'cariKelas2']);

Route::get('Client/siswakelas_3',[HomeController::class, 'showsiswakelas_3']);
Route::post('Client/siswakelas_3', [HomeController::class, 'cariKelas3']);

Route::get('Client/siswakelas_4',[HomeController::class, 'showsiswakelas_4']);
Route::post('Client/siswakelas_4', [HomeController::class, 'cariKelas4']);

Route::get('Client/siswakelas_5',[HomeController::class, 'showsiswakelas_5']);
Route::post('Client/siswakelas_5', [HomeController::class, 'cariKelas5']);

Route::get('Client/siswakelas_6',[HomeController::class, 'showsiswakelas_6']);
Route::post('Client/siswakelas_6', [HomeController::class, 'cariKelas6']);

