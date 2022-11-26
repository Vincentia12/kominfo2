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
                    <td width="560"><center><b><u>LAPORAN PROSES PENGADAAN BARANG/JASA</u></b></td>
                <tr>
                <tr>
                    <td width="560"><center>Nomor : 020/ 654.18/114.6/2022</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Pada hari ini Selasa Tanggal Dua Puluh Bulan September Tahun Dua Ribu Dua Puluh Dua, kami yang bertanda tangan dibawah ini :</td>
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
                    <td width="150">Alamat</td>
                    <td>:</td>
                    <td width="400">Jalan Kanwa No. 22-A, SURABAYA</td>
                </tr>
            </table>
            <br>
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
                    <td width="400">Drs. Ec. NIRMALA DEWI, M.M</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">NIP</td>
                    <td>:</td>
                    <td width="400">19650909 199403 2 006</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Jabatan</td>
                    <td>:</td>
                    <td width="400">Kuasa Pengguna Anggaran</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Alamat</td>
                    <td>:</td>
                    <td width="400">Jalan Kanwa No. 22-A, SURABAYA</td>
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
                    <td width="550">PIHAK KESATU telah melaporkan pekerjaan sesuai dengan :</td>
                </tr>
            </table> 
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="200">Kwitansi Kontrak nomor</td>
                    <td>:</td>
                    <td width="350">020/654.14/114.6/2022</td>
                </tr>
                <tr>
                    <td width="15"> </td>
                    <td width="200">Tanggal</td>
                    <td>:</td>
                    <td width="350">9 September 2022</td>
                </tr>
                <tr>
                    <td width="15"> </td>
                    <td width="200">Pekerjaan</td>
                    <td>:</td>
                    <td width="350">Belanja Alat/Bahan Kapasitas Kelembagaan</td>
                </tr>
                <tr>
                    <td width="15"> </td>
                    <td width="200"> </td>
                    <td></td>
                    <td width="350">Statistik Sektoral Toner Printer</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="10">2.</td>
                    <td width="550">PIHAK KEDUA telah memeriksa dan menerima dengan baik kemajuan hasil</td>
                </tr>
            </table> 
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="10"> </td>
                    <td width="550"> pekerjaan  tersebut, dengan rincian jumlah, jenis dan spesifikasi barang/jasa sebagaimana daftar terlampir.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="550">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>Surabaya, {{ $pengadaan1->tanggal}}</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">PIHAK KEDUA</td>
                    <td width="280">PIHAK KESATU</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">Drs. Ec. NIRMALA DEWI, M.M</td>
                    <td width="280">I WAYAN RUDY ARTHA, S.Kom</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">NIP. 19650909 199403 2 006</td>
                    <td width="280">NIP. 19770517 200901 1 005</td>
                </tr>
            </table>
            <br>
        </div>
    </div>
</div>
@endsection