@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
@section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection -->

<!-- Content Row -->

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@php
    use App\Models\pejabat;
    $pejabat = Pejabat::all();
@endphp
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tbody>
                    <tr>
                        <td>
                            <center>
                                <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                                <font size="3"><b>PROVINSI JAWA TIMUR<b /></font><br>
                        </td>
                    </tr>
                    <tr>
                        <td width="555" colspan="2">
                            <hr>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b><u>BERITA ACARA PENJELASAN PEKERJAAN</u></b>
                    </td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="50">
                        <center>
                            <font size="2">Nomor</font>
                    </td>
                    <td>
                        <center>
                            <font size="2">:</font>
                    </td>
                    <td width="150">
                        <center>
                            <font size="2">020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}} Tanggal {{$pengadaan->deskripsi_tgl}}, dimulai pukul 10.00 WIB sampai dengan selesai, Pejabat Pengadaan di Lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur tanggal @foreach ($pejabat as $pejabat) {{$pejabat->tanggal_sk->isoFormat('D MMMM Y')}} Nomor : {{$pejabat->nomor_sk}}@endforeach , telah mengadakan rapat penjelasan untuk pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670">Dalam rapat penjelasan tersebut tersusun pokok acara sebagai berikut :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td>1.</td>
                    <td width="13"></td>
                    <td width="640" style="text-align: justify;">Pembukaan oleh Pejabat Pengadaan kepada semua yang hadir.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td>2.</td>
                    <td width="13"></td>
                    <td width="640" style="text-align: justify;">Penjelasan seluruh isi Dokumen Pengadaan Langsung.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td>3.</td>
                    <td width="13"></td>
                    <td width="640" style="text-align: justify;">Nilai HPS/OE untuk pekerjaan ini adalah Rp. {{number_format($pengadaan->pengadaan->total_hps)}},- {{$pengadaan->pengadaan->deskripsi_hps}}).</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670">Pokok-Pokok Penjelasan lainnya antara lain sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>DOKUMEN PENGADAAN</b>
                    </td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>BAB I INSTRUKSI KEPADA PESERTA PENGADAAN (LKPP)</b>
                    </td>
                <tr>
            </table>
            <!-- A -->
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="8"><b>A.</b></td>
                    <td colspan="2"><b>UMUM</b></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Lingkup Pekerjaan.....................................................................................................................................</td>
                    <td width="5">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Sumber Dana..............................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Peserta Pengadaan...................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Larangan Korupsi, Kolusi, dan Nepotisme (KKN) serta Penipuan..............................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Larangan Pertentangan Kepentingan.................................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>

            <!-- B -->
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="8"><b>B.</b></td>
                    <td colspan="2"><b>DOKUMEN PENGADAAN</b></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Dokumen Penawaran...............................................................................................................................</td>
                    <td width="5">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Harga Penawaran......................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Mata Uang Penawaran dan Cara Pembayaran.................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Masa Berlaku Penawaran dan Jangka Waktu Pelaksanaan.........................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Pakta Integritas...........................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Bentuk Dokumen Penawaran.................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>

            <!-- C -->
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="8"><b>C.</b></td>
                    <td colspan="2"><b>PEMASUKAN DOKUMEN PENAWARAN</b></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Penyampulan dan Penandaan Sampul Penawaran........................................................................</td>
                    <td width="5">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Penyampaian Dokumen Penawaran.....................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Batas Akhir Waktu Pemasukan Penawaran.......................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>

            <!-- D -->
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="8"><b>D.</b></td>
                    <td colspan="2"><b>PEMBUKAAN DAN EVALUASI PENAWARAN</b></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Pembukaan Penawaran............................................................................................................................</td>
                    <td width="5">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Evaluasi Penawaran...................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>
            <br>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Demikian Berita Acara Penjelasan dalam rangka Pengadaan Langsung untuk pengadaan {{ $pengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya, dibuat dengan sesungguhnya sebagai pertemuan Pejabat Pengadaan dengan peserta Pengadaan Langsung dan merupakan kelengkapan yang tidak terpisahkan dari Dokumen Pengadaan pekerjaan ini.</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>PIHAK PEJABAT PEMBUAT KOMITMEN</b>
                    </td>
                <tr>
            </table>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th style="background-color: lightgrey;" width="50px" scope="col">No</th>
                        <th style="background-color: lightgrey;" width="200px" scope="col">Nama</th>
                        <th style="background-color: lightgrey;" width="165px" scope="col">Jabatan</th>
                        <th style="background-color: lightgrey;" width="100px" scope="col">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center" height="100">
                        <th scope="row">1</th>
                        <td>I WAYAN RUDY ARTHA, S.Kom</td>
                        <td>Pejabat Pembuat Komitmen</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>PIHAK PEJABAT PENGADAAN</b>
                    </td>
                <tr>
            </table>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th style="background-color: lightgrey;" width="50px" scope="col">No</th>
                        <th style="background-color: lightgrey;" width="200px" scope="col">Nama</th>
                        <th style="background-color: lightgrey;" width="165px" scope="col">Jabatan</th>
                        <th style="background-color: lightgrey;" width="100px" scope="col">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center" height="100">
                        <th scope="row">1</th>
                        <td>ADI KURNIAWAN.S.Kom.,M.Kom</td>
                        <td>Pejabat Pengadaan</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>PIHAK PENYEDIA BARANG/JASA</b>
                    </td>
                <tr>
            </table>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th style="background-color: lightgrey;" width="50px" scope="col">No</th>
                        <th style="background-color: lightgrey;" width="200px" scope="col">Nama</th>
                        <th style="background-color: lightgrey;" width="165px" scope="col">Jabatan</th>
                        <th style="background-color: lightgrey;" width="100px" scope="col">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center" height="100">
                        <th scope="row">1</th>
                        <td>MANUHUTU ARMAND FX</td>
                        <td>Direktur CV. PATRIA NUGRAHA</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
</div>

@endsection