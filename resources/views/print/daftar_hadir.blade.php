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
                        <center><font size="3"><b>PEJABAT PENGADAAN BARANG/JASA DILINGKUNGAN</b></font><br>
                                <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</b></font><br>
                                <font size="3"><b>PROVINSI JAWA TIMUR</b></font><br>                                
                    </td>
                </tr>
                <tr>
                    <td width="555" colspan="2"><hr></td>
                </tr>
            </table>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td>
                        <center><font size="3"><b>DAFTAR HADIR</b></font><br><br>
                                <font size="3"><b>PENGEMBALIAN DOKUMEN PRAKUALIFIKASI</b></font><br>
                                <font size="2"><b>Pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan</b></font><br>
                                <font size="2"><b>Statistik Sektoral Toner Printer</b></font><br>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="121" scope="col">Nama Perusahaan</th>
                        <th width="121" scope="col">Alamat dan No.Telepon</th>
                        <th width="121" scope="col">Tanggal</th>
                        <th width="121" scope="col">Tanda Tangan</th>
                    </tr>
                    <tr align="center">
                        <th width="30px" scope="col">1</th>
                        <th width="121" scope="col">2</th>
                        <th width="121" scope="col">3</th>
                        <th width="121" scope="col">4</th>
                        <th width="121" scope="col">5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <th scope="row">1</th>
                        <td>CV. PATRIA NUGRAHA</td>
                        <td>Jl. Kanwa No. 22-A, Surabaya</td>
                        <td>16 Agustus 2022</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>Surabaya, 16 Agustus 2022</td>
                    <td width="50"> </td>
                </tr>
            </table>
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
            <br>
        </div>
    </div>
</div>

@endsection