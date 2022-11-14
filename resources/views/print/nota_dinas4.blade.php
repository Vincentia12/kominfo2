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
                        <center><font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                                <font size="3"><b>PROVINSI JAWA TIMUR<b/></font><br>
                                <font size="3"><u>NOTA DINAS<u/></font><br>
                    </td>
                </tr>
                <tr>
                    <td width="555" colspan="2"><hr></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Kepada</td>
                    <td>:</td>
                    <td width="475">Yth. Sdr. Panitia Pengadaan Dinas Komunikasi dan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80"> </td>
                    <td width="5"> </td>
                    <td width="475">Informatika Provinsi Jawa Timur</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Dari</td>
                    <td>:</td>
                    <td width="475">Pejabat Pengadaan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Tanggal</td>
                    <td>:</td>
                    <td width="475">6 September 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Nomor</td>
                    <td>:</td>
                    <td width="475">020/654.11/114.6/2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Sifat</td>
                    <td>:</td>
                    <td width="475">Segera</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Lampiran</td>
                    <td>:</td>
                    <td width="475">1 (satu) berkas</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Perihal</td>
                    <td>:</td>
                    <td width="475">Penyampaian Berita Acara Proses Pengadaan Langsung</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Sesuai dengan Berita Acara Hasil Pengadaan Langsung Nomor : 020/    654.10/114.6/2022 tanggal 20 Juli 2022 untuk pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer maka bersama ini kami sampaikan administrasi proses pengadaan langsung yang telah selesai dilaksanakan terhadap :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Demikian atas perhatiannya diucapkan terima kasih.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="150">Nama Perusahaan</td>
                    <td width="20">:</td>
                    <td width="345">CV. PATRIA NUGRAHA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="150">Alamat</td>
                    <td width="20">:</td>
                    <td width="345">Jalan Kanwa No. 22-A, SURABAYA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="150">NPWP</td>
                    <td width="20">:</td>
                    <td width="345">01.510.544.8-609.000</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="150">Harga Penawaran</td>
                    <td width="20">:</td>
                    <td width="345">Rp. 5.546.670,- (Lima Juta Lima Ratus Empat</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="150">Setelah Negosiasi</td>
                    <td width="20"> </td>
                    <td width="345">Puluh Enam Ribu Enam Ratus Tujuh Puluh</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="150"> </td>
                    <td width="20"> </td>
                    <td width="345">Rupiah)</td>
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
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>NIP. 19890618 201403 1 002</td>
                    <td width="50"> </td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection