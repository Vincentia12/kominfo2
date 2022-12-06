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

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tr>
                    <td>
                        <img src="{{asset('img/logo_jatim.png')}}" width="70" height="70">
                    </td>
                    <td>
                        <center>
                            <font size="3"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                            <font size="3">DINAS KOMUNIKASI DAN INFORMATIKA</font><br>
                            <font size="3">Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517</font><br>
                            <font size="3">Website : http://www.jatimprov.go.id </font><br>
                            <font size="2">Email:kominfo@jatimprov.go.id</font><br>
                            <font size="3">S U R A B A Y A-60235</font><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>BERITA ACARA PEMBUKAAN PENAWARAN</b>
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
                            <font size="2">020/{{$pengadaan->nomor}}/114.6/2022</font>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Pada hari ini {{$pengadaan->deskripsi_tanggal}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal {{$pengadaan->tanggal->isoFormat('D MMMM Y')}} Nomor : 188/19/114.1/2022, melaksanakan Pembukaan Penawaran untuk pelaksanaan {{$pengadaan->pengadaan->jenis_pengadaan}}, dibiayai dari dana APBD Tahun Anggaran 2022 pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening {{$pengadaan->pengadaan->pelaksana->kode_rekening}} dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{$pengadaan->pengadaan->total_hps}},- ({{$pengadaan->pengadaan->deskripsi_hps}}).</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30"><b>I.</b></td>
                    <td width="530"><b>Personalia dan organisasi rapat :</b></td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="200">Rapat dipimpin oleh</td>
                    <td>:</td>
                    <td width="330">ADI KURNIAWAN.S.Kom.,M.Kom</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="200">Jabatan</td>
                    <td>:</td>
                    <td width="330">Pejabat Pengadaan Barang/Jasa di</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="330">lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="200">dan dihadiri oleh</td>
                    <td>:</td>
                    <td width="330"> </td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">A.</td>
                    <td width="170">PPK</td>
                    <td width="330">:</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="250">I WAYAN RUDY ARTHA, S.Kom</td>
                    <td>:</td>
                    <td width="250">Pejabat Pembuat Komitmen di</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="250"> </td>
                    <td> </td>
                    <td width="250">lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">B.</td>
                    <td width="170">Penyedia Barang/Jasa</td>
                    <td width="330">:</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="250">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td>:</td>
                    <td width="250">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30"><b>II.</b></td>
                    <td width="530"><b>Hasil Pembukaan Penawaran sebagai berikut :</b></td>
                <tr>
            </table>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="200px" scope="col">Nama Perusahaan</th>
                        <th width="95px" scope="col">Surat Penawaran</th>
                        <th width="95px" scope="col">Dokumen Teknis</th>
                        <th width="95px" scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center" height="100">
                        <td scope="row">1</td>
                        <td>{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Lengkap</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan Pengadaan Langsung.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PENGADAAN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>ADI KURNIAWAN.S.Kom.,M.Kom</td>
                    <td width="50"> </td>
                </tr>
                <tr>
                    <td width="300"> </td>
                    <td>NIP. 19890618 201403 1 002</td>
                    <td width="50"> </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas4')  }}">Cetak PDF <i class="fa fa-save"></i></a>
    </div>
</div>

@endsection