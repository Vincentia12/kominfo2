<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PelaksanaController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BarangController;

use App\Http\Controllers\PejabatController;

use App\Http\Controllers\PdfController;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\Auth;

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

Route::get('/admin', function () {
    return view('index.admin');
});

//pelaksana
Route::resource('/pelaksana', PelaksanaController::class);
Route::get('/input_pelaksana', [PelaksanaController::class, 'index']);
Route::post('/postdata', [PelaksanaController::class, 'store']);
Route::post('/pelaksana/update/{id}', [PelaksanaController::class, 'update']);

//jadwal
Route::resource('/jadwal', JadwalController::class);
Route::get('/input_jadwal', [JadwalController::class, 'index']);
Route::post('/postjadwal', [JadwalController::class, 'store']);
Route::post('/jadwal/update/{id}', [JadwalController::class, 'update']);

//barang
Route::resource('/barang', BarangController::class);
Route::get('/input_barang', [BarangController::class, 'index']);
Route::post('/postbarang', [BarangController::class, 'store']);
Route::post('/barang/update/{id}', [BarangController::class, 'update']);

//pejabat
Route::post('/pejabat/update/{id}', [PejabatController::class, 'update']);

//Pengadaan
Route::resource('/pengadaan', PengadaanController::class);
Route::get('/input_pengadaan', [PengadaanController::class, 'index']);
Route::post('/postpengadaan', [PengadaanController::class, 'store']);
Route::post('/pengadaan/update/{id}', [PengadaanController::class, 'update']);

//detail pengadaan1<50juta
Route::get('/pengadaan1/show1/{id}', [PengadaanController::class, 'show1'])->name('pengadaan1.show1');
Route::get('/pengadaan1/show2/{id}', [PengadaanController::class, 'show2'])->name('pengadaan1.show2');
Route::get('/pengadaan1/show3/{id}', [PengadaanController::class, 'show3'])->name('pengadaan1.show3');
Route::get('/pengadaan1/show4/{id}', [PengadaanController::class, 'show4'])->name('pengadaan1.show4');
Route::get('/pengadaan1/show5/{id}', [PengadaanController::class, 'show5'])->name('pengadaan1.show5');
Route::get('/pengadaan1/show6/{id}', [PengadaanController::class, 'show6'])->name('pengadaan1.show6');
Route::get('/pengadaan1/show7/{id}', [PengadaanController::class, 'show7'])->name('pengadaan1.show7');
Route::get('/pengadaan1/show8/{id}', [PengadaanController::class, 'show8'])->name('pengadaan1.show8');
Route::get('/pengadaan1/show9/{id}', [PengadaanController::class, 'show9'])->name('pengadaan1.show9');
Route::get('/pengadaan1/show10/{id}', [PengadaanController::class, 'show10'])->name('pengadaan1.show10');
Route::get('/pengadaan1/show11/{id}', [PengadaanController::class, 'show11'])->name('pengadaan1.show11');
Route::get('/pengadaan1/show12/{id}', [PengadaanController::class, 'show12'])->name('pengadaan1.show12');
Route::get('/pengadaan1/show13/{id}', [PengadaanController::class, 'show13'])->name('pengadaan1.show13');
Route::get('/pengadaan1/show14/{id}', [PengadaanController::class, 'show14'])->name('pengadaan1.show14');
Route::get('/pengadaan1/show15/{id}', [PengadaanController::class, 'show15'])->name('pengadaan1.show15');
Route::get('/pengadaan1/show16/{id}', [PengadaanController::class, 'show16'])->name('pengadaan1.show16');
Route::get('/pengadaan1/show17/{id}', [PengadaanController::class, 'show17'])->name('pengadaan1.show17');
Route::get('/pengadaan1/show18/{id}', [PengadaanController::class, 'show18'])->name('pengadaan1.show18');
Route::get('/pengadaan1/show19/{id}', [PengadaanController::class, 'show19'])->name('pengadaan1.show19');
Route::get('/pengadaan1/show20/{id}', [PengadaanController::class, 'show20'])->name('pengadaan1.show20');
Route::get('/pengadaan1/show21/{id}', [PengadaanController::class, 'show21'])->name('pengadaan1.show21');
Route::get('/pengadaan1/show22/{id}', [PengadaanController::class, 'show22'])->name('pengadaan1.show22');
Route::get('/pengadaan1/show23/{id}', [PengadaanController::class, 'show23'])->name('pengadaan1.show23');
Route::get('/pengadaan1/show24/{id}', [PengadaanController::class, 'show24'])->name('pengadaan1.show24');
Route::get('/pengadaan1/show25/{id}', [PengadaanController::class, 'show25'])->name('pengadaan1.show25');
Route::get('/pengadaan1/show26/{id}', [PengadaanController::class, 'show26'])->name('pengadaan1.show26');
Route::get('/pengadaan1/show27/{id}', [PengadaanController::class, 'show27'])->name('pengadaan1.show27');
Route::get('/pengadaan1/show28/{id}', [PengadaanController::class, 'show28'])->name('pengadaan1.show28');
//29
//30
Route::get('/pengadaan1/show31/{id}', [PengadaanController::class, 'show31'])->name('pengadaan1.show31');

//detail pengadaan1>50juta
Route::get('/pengadaan2/show1/{id}', [PengadaanController::class, 'show1'])->name('pengadaan2.show1');
Route::get('/pengadaan2/show2/{id}', [PengadaanController::class, 'show2'])->name('pengadaan2.show2');
Route::get('/pengadaan2/show3/{id}', [PengadaanController::class, 'show3'])->name('pengadaan2.show3');
Route::get('/pengadaan2/show4/{id}', [PengadaanController::class, 'show4'])->name('pengadaan2.show4');
Route::get('/pengadaan2/show5/{id}', [PengadaanController::class, 'show5'])->name('pengadaan2.show5');
Route::get('/pengadaan2/show6/{id}', [PengadaanController::class, 'show6'])->name('pengadaan2.show6');
Route::get('/pengadaan2/show7/{id}', [PengadaanController::class, 'show7'])->name('pengadaan2.show7');
Route::get('/pengadaan2/show8/{id}', [PengadaanController::class, 'show8'])->name('pengadaan2.show8');
Route::get('/pengadaan2/show9/{id}', [PengadaanController::class, 'show9'])->name('pengadaan2.show9');
Route::get('/pengadaan2/show10/{id}', [PengadaanController::class, 'show10'])->name('pengadaan2.show10');
Route::get('/pengadaan2/show11/{id}', [PengadaanController::class, 'show11'])->name('pengadaan2.show11');
Route::get('/pengadaan2/show12/{id}', [PengadaanController::class, 'show12'])->name('pengadaan2.show12');
Route::get('/pengadaan2/show13/{id}', [PengadaanController::class, 'show13'])->name('pengadaan2.show13');
Route::get('/pengadaan2/show14/{id}', [PengadaanController::class, 'show14'])->name('pengadaan2.show14');
Route::get('/pengadaan2/show15/{id}', [PengadaanController::class, 'show15'])->name('pengadaan2.show15');
Route::get('/pengadaan2/show16/{id}', [PengadaanController::class, 'show16'])->name('pengadaan2.show16');
Route::get('/pengadaan2/show17/{id}', [PengadaanController::class, 'show17'])->name('pengadaan2.show17');
Route::get('/pengadaan2/show18/{id}', [PengadaanController::class, 'show18'])->name('pengadaan2.show18');
Route::get('/pengadaan2/show19/{id}', [PengadaanController::class, 'show19'])->name('pengadaan2.show19');
Route::get('/pengadaan2/show20/{id}', [PengadaanController::class, 'show20'])->name('pengadaan2.show20');
Route::get('/pengadaan2/show21/{id}', [PengadaanController::class, 'show21'])->name('pengadaan2.show21');
Route::get('/pengadaan2/show22/{id}', [PengadaanController::class, 'show22'])->name('pengadaan2.show22');
Route::get('/pengadaan2/show23/{id}', [PengadaanController::class, 'show23'])->name('pengadaan2.show23');
Route::get('/pengadaan2/show24/{id}', [PengadaanController::class, 'show24'])->name('pengadaan2.show24');
Route::get('/pengadaan2/show25/{id}', [PengadaanController::class, 'show25'])->name('pengadaan2.show25');
Route::get('/pengadaan2/show26/{id}', [PengadaanController::class, 'show26'])->name('pengadaan2.show26');
Route::get('/pengadaan2/show27/{id}', [PengadaanController::class, 'show27'])->name('pengadaan1.show27');
Route::get('/pengadaan2/show28/{id}', [PengadaanController::class, 'show28'])->name('pengadaan2.show28');
Route::get('/pengadaan2/show31/{id}', [PengadaanController::class, 'show31'])->name('pengadaan2.show31');
// Route::get('/pengadaan1', [PengadaanController::class, 'index1'], [JadwalController::class, 'index1']);
Route::get('/pengadaan1', [PengadaanController::class, 'index1']);
Route::get('/pengadaan1cari', [PengadaanController::class, 'cari1'])->name('cari1');

Route::get('/pengadaan2', [PengadaanController::class, 'index2']);
Route::get('/pengadaan2cari', [PengadaanController::class, 'cari2'])->name('cari2');

//print pengadaan1 <50juta
Route::get('print', [PdfController::class, 'index']);
Route::get('pengadaan1/print1/{id}', [PdfController::class, 'nota_dinas1'])->name('pengadaan1.print1');
Route::get('pengadaan1/print2/{id}', [PdfController::class, 'nota_dinas2'])->name('pengadaan1.print2');
Route::get('pengadaan1/print3/{id}', [PdfController::class, 'undangan_persiapan'])->name('pengadaan1.print3');
Route::get('pengadaan1/print4/{id}', [PdfController::class, 'pakta_integritas'])->name('pengadaan1.print4');
Route::get('pengadaan1/print5/{id}', [PdfController::class, 'pernyataan_minat'])->name('pengadaan1.print5');
//6
Route::get('pengadaan1/print7/{id}', [PdfController::class, 'daftar_hadir'])->name('pengadaan1.print7');
Route::get('pengadaan1/print8/{id}', [PdfController::class, 'ba_evaluasi'])->name('pengadaan1.print8');
Route::get('pengadaan1/print9/{id}', [PdfController::class, 'lampiran_ba_evaluasi'])->name('pengadaan1.print9');
Route::get('pengadaan1/print10/{id}', [PdfController::class, 'undangan_penawaran'])->name('pengadaan1.print10');
Route::get('pengadaan1/print11/{id}', [PdfController::class, 'ba_pekerjaan'])->name('pengadaan1.print11');
//12
Route::get('pengadaan1/print13/{id}', [PdfController::class, 'ba_penawaran'])->name('pengadaan1.print13');
Route::get('pengadaan1/print14/{id}', [PdfController::class, 'undangan_nego'])->name('pengadaan1.print14');
Route::get('pengadaan1/print15/{id}', [PdfController::class, 'ba_nego'])->name('pengadaan1.print15');
//16
//17
Route::get('pengadaan1/print18/{id}', [PdfController::class, 'nota_dinas3'])->name('pengadaan1.print18');
Route::get('pengadaan1/print19/{id}', [PdfController::class, 'penetapan_penyedia'])->name('pengadaan1.print19');
Route::get('pengadaan1/print20/{id}', [PdfController::class, 'undangan_penyedia'])->name('pengadaan1.print20');
Route::get('pengadaan1/print21/{id}', [PdfController::class, 'surat_perintah_kerja'])->name('pengadaan1.print21');
Route::get('pengadaan1/print22/{id}', [PdfController::class, 'surat_perintah_mulai_kerja'])->name('pengadaan1.print22');
Route::get('pengadaan1/print23/{id}', [PdfController::class, 'ba_serah_terima'])->name('pengadaan1.print23');
Route::get('pengadaan1/print24/{id}', [PdfController::class, 'ba_peny_barang'])->name('pengadaan1.print24');
//25
Route::get('pengadaan1/print26/{id}', [PdfController::class, 'ba_pembayaran'])->name('pengadaan1.print26');
Route::get('pengadaan1/print27/{id}', [PdfController::class, 'lap_proses_pengadaan'])->name('pengadaan1.print27');
Route::get('pengadaan1/print28/{id}', [PdfController::class, 'kuitansi_kontrak'])->name('pengadaan1.print28');
//29
//30
Route::get('pengadaan1/print31/{id}', [PdfController::class, 'tor'])->name('pengadaan1.print31');
Route::get('print_notadinas4', [PdfController::class, 'nota_dinas4']);
Route::get('ba_pekerjaan', [PdfController::class, 'ba_pekerjaan']);

//print pengadaan2 >50juta
Route::get('pengadaan2/print1/{id}', [PdfController::class, 'nota_dinas1'])->name('pengadaan2.print1');
Route::get('pengadaan2/print2/{id}', [PdfController::class, 'nota_dinas2'])->name('pengadaan2.print2');
Route::get('pengadaan2/print3/{id}', [PdfController::class, 'undangan_persiapan'])->name('pengadaan2.print3');
Route::get('pengadaan2/print4/{id}', [PdfController::class, 'pakta_integritas'])->name('pengadaan2.print4');
//5
//6
Route::get('pengadaan2/print7/{id}', [PdfController::class, 'daftar_hadir'])->name('pengadaan2.print7');
Route::get('pengadaan2/print8/{id}', [PdfController::class, 'ba_evaluasi'])->name('pengadaan2.print8');
Route::get('pengadaan2/print9/{id}', [PdfController::class, 'lampiran_ba_evaluasi'])->name('pengadaan2.print9');
Route::get('pengadaan2/print10/{id}', [PdfController::class, 'undangan_penawaran'])->name('pengadaan2.print10');
Route::get('pengadaan2/print11/{id}', [PdfController::class, 'ba_pekerjaan'])->name('pengadaan2.print11');
//12
Route::get('pengadaan2/print13/{id}', [PdfController::class, 'ba_penawaran'])->name('pengadaan2.print13');
Route::get('pengadaan2/print14/{id}', [PdfController::class, 'undangan_nego'])->name('pengadaan2.print14');
Route::get('pengadaan2/print15/{id}', [PdfController::class, 'ba_nego'])->name('pengadaan2.print15');
//16
//17
Route::get('pengadaan2/print18/{id}', [PdfController::class, 'nota_dinas3'])->name('pengadaan2.print18');
Route::get('pengadaan2/print19/{id}', [PdfController::class, 'penetapan_penyedia'])->name('pengadaan2.print19');
Route::get('pengadaan2/print20/{id}', [PdfController::class, 'undangan_penyedia'])->name('pengadaan2.print20');
Route::get('pengadaan2/print21/{id}', [PdfController::class, 'surat_perintah_kerja'])->name('pengadaan2.print21');
Route::get('pengadaan2/print22/{id}', [PdfController::class, 'surat_perintah_mulai_kerja'])->name('pengadaan2.print22');
Route::get('pengadaan2/print23/{id}', [PdfController::class, 'ba_serah_terima'])->name('pengadaan2.print23');
Route::get('pengadaan2/print24/{id}', [PdfController::class, 'ba_peny_barang'])->name('pengadaan2.print24');
//25
Route::get('pengadaan2/print26/{id}', [PdfController::class, 'ba_pembayaran'])->name('pengadaan1.print26');

//


Auth::routes();
Auth::routes(['verify' => false]);
// Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [view::class, 'index']);
Route::get('/masuk', [view::class, 'login']);
Route::post('/save', [view::class, 'save']);;
Route::get('admin/hapus/{id}', [view::class, 'hapus']);

Route::get('/pengguna', [view::class, 'pengguna'])->name('pengguna');

// Route::resource('/delete', view::class);