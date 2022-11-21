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
                        <center><font size="3"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                                <font size="3">DINAS KOMUNIKASI DAN INFORMATIKA</font><br>
                                <font size="3">Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517</font><br>
                                <font size="3">Website : http://www.jatimprov.go.id </font><br>
                                <font size="2">Email:kominfo@jatimprov.go.id</font><br>
                                <font size="3">S U R A B A Y A-60235</font><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560"><center><b>SURAT PERINTAH KERJA</b></td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560"><center><font size="2"><b>Nomor : 020/654.15/114.6/2022</font></b></td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Pada hari ini Senin Tanggal Dua Belas,  Bulan September Tahun Dua Ribu Dua Puluh Dua. Kami yang bertanda tangan dibawah ini :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="10">1.</td>
                    <td width="70">Nama</td>
                    <td>:</td>
                    <td width="250">I WAYAN RUDY ARTHA, S.Kom</td>
                    <td width="230">NIP. 19770517 200901 1 005</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="70">Jabatan</td>
                    <td>:</td>
                    <td width="480">Pejabat Pembuat Komitmen Dinas Komunikasi Dan Informatika</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="70"> </td>
                    <td width="480">Provinsi Jawa Timur</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Alamat Kantor</td>
                    <td>:</td>
                    <td width="400">Jl. Ahmad Yani 242 – 244 Surabaya</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="555">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut <b>PIHAK KESATU</b></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="10">2.</td>
                    <td width="70">Nama</td>
                    <td>:</td>
                    <td width="480">MANUHUTU ARMAND FX</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="70">Jabatan</td>
                    <td>:</td>
                    <td width="480">Direktur</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Nama Perusahaan</td>
                    <td>:</td>
                    <td width="400">CV. PATRIA NUGRAHA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Alamat Kantor</td>
                    <td>:</td>
                    <td width="400">Jalan Kanwa No. 22-A, SURABAYA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="555">Bertindak untuk dan atas nama Perusahaan CV. PATRIA NUGRAHA selanjutnya disebut <b>PIHAK KEDUA</b></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Berdasarkan :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">1.</td>
                    <td width="530">Surat Permintaan Penawaran Nomor : 020/654.5/114.6/2022 Tanggal 22 Agustus 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">2.</td>
                    <td width="530">Surat Penawaran Harga Nomor  : 233/PEN/PN/IX/2022 Tanggal 24 Agustus 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">3.</td>
                    <td width="530">Berita Acara Hasil Klarifikasi dan Negosiasi Nomor : 020/654.9/114.6/2022 Tanggal 1 September 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">4.</td>
                    <td width="530">Berita Acara Hasil Pengadaan Langsung Nomor : 020/654.10/114.6/2022 Tanggal 5 September 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Maka PIHAK KESATU menerbitkan Surat Perintah Kerja, dengan ketentuan :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">5.</td>
                    <td width="530">Lingkup Pekerjaan :</td>
                </tr>
            </table>
            <br>
        </div>
    </div>
</div>

@endsection