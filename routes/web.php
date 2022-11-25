<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemilikController;

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

// CRUD
// route untuk input data yg telah terverifikasi
Route::get('/verified-create', function () {
    return view('admin.editpemilik');
});

// route untuk input data yg belum terverifikasi
Route::get('/show', function () {
    return view('no-admin.show');
});


// Route::get('/editpemilik', function () {
//     return view('admin.editpemilik');
// });
Route::get('/lihat', function () {
    return view('admin.lihat');
});

Route::get('/lihat', function () {
    return view('admin.lihat');
});

//baru
// Route::get('/pengadaan2', function () {
//     return view('admin.pengadaan2');
// });


// Route::get('/input_anggaran', function () {
//     return view('admin.input_anggaran');
// });

// Route::resource('/pengaadaan', PengadaanController::class);
// Route::get('/input_pengadaan', function () {
//     return view('admin.inputpengadaan');
// });

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
// Route::get('/pejabat/edit/{id}', [PejabatController::class, 'edit']);
Route::post('/pejabat/update/{id}', [PejabatController::class, 'update']);

//Pengadaan
Route::resource('/pengadaan', PengadaanController::class);
// Route::resource('/pengadaan1', PengadaanController::class);
Route::get('/input_pengadaan', [PengadaanController::class, 'index']);
Route::post('/postpengadaan', [PengadaanController::class, 'store']);
Route::post('/pengadaan/update/{id}', [PengadaanController::class, 'update']);
// Route::delete('pengadaan/{id}', [PengadaanController::class, 'destroy']);


// Route::get('/input_pengadaan', [PengadaanController::class, 'index']);
// Route::resource('/pengadaan1', PengadaanController::class);
// Route::get('/pengadaan1/{id}', [PengadaanController::class, 'show'])->name('show');
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
Route::get('/pengadaan1/show12/{id}', [PengadaanController::class, 'show11'])->name('pengadaan1.show12');
Route::get('/pengadaan1/show13/{id}', [PengadaanController::class, 'show11'])->name('pengadaan1.show13');
Route::get('/pengadaan1/show14/{id}', [PengadaanController::class, 'show11'])->name('pengadaan1.show14');
Route::get('/pengadaan1/show15/{id}', [PengadaanController::class, 'show11'])->name('pengadaan1.show15');
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
// Route::get('/lihat', PengadaanController::class, 'show1')->name('show1');

// Route::get('/pengadaan1', [PengadaanController::class, 'index1'], [JadwalController::class, 'index1']);
Route::get('/pengadaan1', [PengadaanController::class, 'index1']);
// Route::get('/pengadaan1/detail/{id}', [PengadaanController::class, 'dt1']);
// Route::get('/pengadaan1cari', [PengadaanController::class, 'cari1'])->name('cari1');
Route::get('/pengadaan1cari', [JadwalController::class, 'cari1'])->name('cari1');

Route::get('/pengadaan2', [PengadaanController::class, 'index2']);
Route::get('/pengadaan2cari', [PengadaanController::class, 'cari2'])->name('cari2');

// Route::get('/pengadaan1', [JadwalController::class, 'index1']);

//print
Route::get('print', [PdfController::class, 'index']);
Route::get('pengadaan1/print1/{id}', [PdfController::class, 'nota_dinas1'])->name('pengadaan1.print1');
Route::get('pengadaan1/print2/{id}', [PdfController::class, 'nota_dinas2'])->name('pengadaan1.print2');
Route::get('pengadaan1/print3/{id}', [PdfController::class, 'undangan_persiapan'])->name('pengadaan1.print3');
Route::get('pengadaan1/print4/{id}', [PdfController::class, 'pakta_integritas'])->name('pengadaan1.print4');
//5
//6
Route::get('pengadaan1/print7/{id}', [PdfController::class, 'daftar_hadir'])->name('pengadaan1.print7');
Route::get('pengadaan1/print8/{id}', [PdfController::class, 'ba_evaluasi'])->name('pengadaan1.print8');
Route::get('print_notadinas4', [PdfController::class, 'nota_dinas4']);
Route::get('ba_nego', [PdfController::class, 'ba_nego']);
Route::get('ba_pekerjaan', [PdfController::class, 'ba_pekerjaan']);
Route::get('penetapan_penyedia', [PdfController::class, 'penetapan_penyedia']);
Route::get('undangan_nego', [PdfController::class, 'undangan_nego']);
Route::get('undangan_penawaran', [PdfController::class, 'undangan_penawaran']);
Route::get('undangan_penawaran', [PdfController::class, 'undangan_penyedia']);

// Route::get('/input_jadwal', function () {
//     return view('admin.input_jadwal');
// });

// Route::get('/input_barang', function () {
//     return view('admin.input_barang');
// });
// Route::resource('/pelaksanas', PelaksanaController::class);
// Route::get('/input_pelaksana', function () {
//     return view('admin.input_pelaksana');
// });

Route::get('/setting', function () {
    return view('admin.setting');
});
//


Auth::routes();
Auth::routes(['verify' => false]);
// Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [view::class, 'index']);
Route::get('/masuk', [view::class, 'login']);
Route::post('/save', [view::class, 'save']);
// Route::delete('/admin/{id}',[view::class, 'delete']);
// Route::delete('/admin/{id}', 'view@destroy')->name('admin.destroy');
// Route::get('admin/hapus/{id}', 'view@hapus');
Route::get('admin/hapus/{id}', [view::class, 'hapus']);
// Route::get('admin/edit/{id}', [PejabatController::class, '']);


Route::get('/guest', [GuestController::class, 'index'])->name('guest');

Route::get('/pengguna', [view::class, 'pengguna'])->name('pengguna');
// Route::dele('/delete',[view::class, 'destroy']);
// Route::delete('/pengguna/{id}', 'view@destroy')->name('pengguna.destroy');

//tambahkan kode berikut
// Route::resource('/asets', PemilikController::class);

Route::resource('/delete', view::class);

Route::resource('/pemilik', PemilikController::class);
// Route::resource('/pengguna', View::class);
// Route::resource('/save', App\Http\Controllers\view::class,'save');

//print
//1
Route::get('/nota_dinas1', function () {
    return view('print.nota_dinas1');
});
//2
Route::get('/nota_dinas2', function () {
    return view('print.nota_dinas2');
});
//3
Route::get('/nota_dinas4', function () {
    return view('print.nota_dinas4');
});
//4
Route::get('/undangan_persiapan', function () {
    return view('print.undangan_persiapan');
});
//5
Route::get('/pakta_integritas', function () {
    return view('print.pakta_integritas');
});
//6
Route::get('/daftar_hadir', function () {
    return view('print.daftar_hadir');
});
//7
Route::get('/ba_evaluasi', function () {
    return view('print.ba_evaluasi');
});
//8
Route::get('/undangan_penawaran', function () {
    return view('print.undangan_penawaran');
});
//9
Route::get('/ba_pekerjaan', function () {
    return view('print.ba_pekerjaan');
});
//10
Route::get('/ba_penawaran', function () {
    return view('print.ba_penawaran');
});
//11
Route::get('/undangan_nego', function () {
    return view('print.undangan_nego');
});
//12
Route::get('/ba_nego', function () {
    return view('print.ba_nego');
});
//13
Route::get('/penetapan_penyedia', function () {
    return view('print.penetapan_penyedia');
});
//14
Route::get('/undangan_penyedia', function () {
    return view('print.undangan_penyedia');
});
//15
Route::get('/kuitansi_kontrak', function () {
    return view('print.kuitansi_kontrak');
});
//16
Route::get('/evaluasi_dok', function () {
    return view('print.evaluasi_dok');
});
//17
Route::get('/surat_perintah_kerja', function () {
    return view('print.surat_perintah_kerja');
});
//18
Route::get('/surat_perintah_mulai_kerja', function () {
    return view('print.surat_perintah_mulai_kerja');
});
//19
Route::get('/ba_serah_terima', function () {
    return view('print.ba_serah_terima');
});
//20
Route::get('/lampiran_ba_serah_terima', function () {
    return view('print.lampiran_ba_serah_terima');
});
// Route::resource('/getusr',[App\Http\Controllers\AdminController::class, 'index']);

// Route::get('/editpejabat/{}')
