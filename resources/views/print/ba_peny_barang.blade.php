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
                    <td width="560"><center><b><u>BERITA ACARA PENYERAHAN BARANG/JASA</u></b></td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr align="center">
                    <td width="280" text-align="right">Nomor : 020/</td>
                    <td width="10" text-align="left"> </td>
                    <td width="270" text-align="left">/114.6/2022</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Pada hari ini {{$pengadaan1->deskripsi_tanggal}}, kami yang bertanda tangan dibawah ini :</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="10">I.</td>
                    <td width="150">Nama</td>
                    <td>:</td>
                    <td width="400">I WAYAN RUDY ARTHA, S.Kom</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">NIP</td>
                    <td>:</td>
                    <td width="400">19770517 200901 1 005</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Jabatan</td>
                    <td>:</td>
                    <td width="400">Pejabat Pembuat Komitmen</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="555">Yang selanjutnya disebut <b>PIHAK KESATU</b></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="10">II.</td>
                    <td width="150">Nama</td>
                    <td>:</td>
                    <td width="400">AGUS SUNARYO</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">NIP</td>
                    <td>:</td>
                    <td width="400">19660717 201001 1 003</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Jabatan</td>
                    <td>:</td>
                    <td width="400">Pengurus Barang Persediaan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="555">Yang selanjutnya disebut <b>PIHAK KEDUA</b></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Dengan ini menyatakan bahwa : </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="10">1.</td>
                    <td width="550">PIHAK KESATU telah menyerahkan barang/jasa hasil pekerjaan pengadaan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="550">{{$pengadaan1->pengadaan->jenis_pengadaan}} hasil pekerjaan sesuai dengan Kwitansi Kontrak nomor : 020/{{$pengadaan1->nomor}}/114.6/2022, Tanggal  {{ $pengadaan1->tanggal}};</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="10">2.</td>
                    <td width="550">PIHAK KEDUA telah menerima dengan baik penyerahan barang/jasa</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="550">tersebut sebagaimana daftar terlampir.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">PIHAK KEDUA</td>
                    <td width="280">PIHAK KESATU</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">PENGURUS BARANG PERSEDIAAN</td>
                    <td width="280">PEJABAT PEMBUAT KOMITMEN</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">AGUS SUNARYO</td>
                    <td width="280">I WAYAN RUDY ARTHA, S.Kom</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">NIP. 19660717 201001 1 003</td>
                    <td width="280">NIP. 19770517 200901 1 005</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection