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
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Lampiran Berita Acara Serah Terima  Hasil Pekerjaan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="100">Nomor</td>
                    <td width="30">:</td>
                    <td width="430">020/ 654.17/114.6/2022</td>
                <tr>
                <tr>
                    <td width="100">Tanggal</td>
                    <td width="30">:</td>
                    <td width="430">20 September 2022</td>
                <tr>
            </table>
            <br>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="100px" scope="col">Banyaknya</th>
                        <th width="470px" scope="col">Uraian Spesifikasi</th>
                        <th width="100px" scope="col">Harga Satuan (Rp.)</th>
                        <th width="100px" scope="col">Total Harga (Rp.)</th>
                    </tr>
                </thead>
            </table>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr>
                        <td width="31px"> </td>
                        <td width="800px">Pengadaan Belanja Alat/Bahan Untuk Kegiatan Kantor</td>
                    </tr>
                </thead>
            </table>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr>
                        <td width="30px" align="center">1.</td>
                        <td width="570px">Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer</td>
                        <td width="100px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                    </tr>
                </thead>
            </table>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <td width="30px" scope="col"> </td>
                        <td width="50px" scope="col">2</td>
                        <td width="50px" scope="col">buah</td>
                        <td width="470px" scope="col">Tinta Printer Epson L-1300 -(2)hitam, cyan,magenta,yellow</td>
                        <td width="100px" scope="col">1.245.000,-</td>
                        <td width="100px" scope="col">2.490.000,-</td>
                    </tr>
                </thead>
                <thead>
                    <tr align="center">
                        <td width="30px" scope="col"> </td>
                        <td width="50px" scope="col">1</td>
                        <td width="50px" scope="col">buah</td>
                        <td width="470px" scope="col">Tinta Printer Epson L-1800 -(2)hitam,cyan,magenta,yellow,lightcyan, lightmagenta</td>
                        <td width="100px" scope="col">1.257.000,-</td>
                        <td width="100px" scope="col">1.257.000,-</td>
                    </tr>
                </thead>
                <thead>
                    <tr align="center">
                        <td width="30px" scope="col"> </td>
                        <td width="50px" scope="col">1</td>
                        <td width="50px" scope="col">buah</td>
                        <td width="470px" scope="col">Tinta Printer Epson L-6160 -(2)hitam,cyan,magenta,yellow</td>
                        <td width="100px" scope="col">1.250.000,-</td>
                        <td width="100px" scope="col">1.250.000,-</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection