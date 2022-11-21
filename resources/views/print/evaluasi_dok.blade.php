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
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="120">DAFTAR</td>
                    <td width="30">:</td>
                    <td width="750">Evaluasi Dokumen Prakualifikasi</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="120">PEKERJAAN</td>
                    <td width="30">:</td>
                    <td width="750">Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="120">KEPERLUAN</td>
                    <td width="30">:</td>
                    <td width="750">Dinas Komunikasi Dan Informatika Provinsi Jawa Timur</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="120">TANGGAL</td>
                    <td width="30">:</td>
                    <td width="750">18 Agustus 2022</td>
                </tr>
            </table>
            <br>
            
        </div>
    </div>
</div>

@endsection