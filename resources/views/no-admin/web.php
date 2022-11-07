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
Route::get('/create', function () {
    return view('admin.create');
});
Route::get('/tambah', function () {
    return view('admin.pemilik');
});
// Route::get('/editpemilik', function () {
//     return view('admin.editpemilik');
// });
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
// Route::get('/pelaksana/edit/{id}', [PelaksanaController::class, 'edit'])->name('editpelaksana');
// Route::post('/pelaksana/update/{id}', [PelaksanaController::class, 'update'])->name('updatepelaksana');
// Route::get('/pelaksana/edit', [PelaksanaController::class, 'edit'])->name('editpelaksana');
// Route::post('/pelaksana/update', [PelaksanaController::class, 'update'])->name('updatepelaksana');
// Route::post('/pelaksana/destory/{id}', [PelaksanaController::class, 'destory']);
// Route::resource('/pelaksana', PelaksanaController::class);
// Route::get('/{id}/edit-pelaksana', 'PelaksanaController@edit');
// Route::post('/update-pelaksana/{id}', 'PelaksanaController@update');

// Route::post('/inputpelaksana'. PelaksanaController::class);


Route::get('/input_pengadaan', [PengadaanController::class, 'index']);
Route::post('/postpengadaan', [PengadaanController::class, 'store']);


// Route::get('/{id}/edit', 'PengadaanController@edit');
// Route::post('/update/{id}', 'PengadaanController@update');
// Route::delete('{id}/hapus', 'PengadaanController@destroy');
// Route::get('/pengadaan/{id}/edit', 'PengadaanController@edit');
// Route::patch('/pengadaan/{id}', 'PengadaanController@update');
// Route::delete('/pengadaan/{id}', 'PengadaanController@destroy');


Route::get('/input_jadwal', [JadwalController::class, 'index']);
Route::post('/postjadwal', [JadwalController::class, 'store']);

Route::get('/input_barang', [BarangController::class, 'index']);
Route::post('/postbarang', [BarangController::class, 'store']);

Route::resource('/barang', BarangController::class);

// Route::get('/input_pengadaan', [PengadaanController::class, 'index']);
Route::resource('/pengadaan', PengadaanController::class);
// Route::resource('/pengadaan2', PengadaanController::class);

Route::get('/pengadaan1', [PengadaanController::class, 'index1']);
Route::get('/pengadaan2', [PengadaanController::class, 'index2']);

//pejabat
// Route::get('/pejabat/edit/{id}', [PejabatController::class, 'edit']);
Route::post('/pejabat/update/{id}', [PejabatController::class, 'update']);


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
Route::get('/nota_dinas1', function () {
    return view('print.nota_dinas1');
});
Route::get('/nota_dinas2', function () {
    return view('print.nota_dinas2');
});
Route::get('/undangan_persiapan', function () {
    return view('print.undangan_persiapan');
});
Route::get('/pakta_integritas', function () {
    return view('print.pakta_integritas');
});
// Route::resource('/getusr',[App\Http\Controllers\AdminController::class, 'index']);

// Route::get('/editpejabat/{}')
