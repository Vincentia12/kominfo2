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
                    <td width="560"><center><b><u>BERITA ACARA PEMBAYARAN</u></b></td>
                <tr>
                <tr>
                    <td width="560"><center>Nomor : 020/{{$pengadaan1->nomor}}/114.6/2022</td>
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
                    <td width="400">Jl. Ahmad Yani 242 - 244 Surabaya</td>
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
                    <td width="400">MANUHUTU ARMAND FX</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Jabatan</td>
                    <td>:</td>
                    <td width="400">Direktur CV. PATRIA NUGRAHA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="15"> </td>
                    <td width="150">Alamat</td>
                    <td>:</td>
                    <td width="400">Jalan Jl. Kanwa No. 22-A S U R A B A Y A</td>
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
                    <td width="20">1.</td>
                    <td width="540">Telah  Melaksanakan Pekerjaan :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">a.</td>
                    <td width="100">Pekerjaan</td>
                    <td width="10">:</td>
                    <td width="410">Belanja Belanja Alat/Bahan Kapasitas Kelembagaan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20"> </td>
                    <td width="100"> </td>
                    <td width="10"> </td>
                    <td width="410">Statistik Sektoral Toner Printer</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">b.</td>
                    <td width="100">Lokasi</td>
                    <td width="10">:</td>
                    <td width="410">Surabaya</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">c.</td>
                    <td width="100">Departemen/</td>
                    <td width="10">:</td>
                    <td width="410">Dinas Komunikasi dan Informatika Provinsi</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20"> </td>
                    <td width="100">Lembaga</td>
                    <td width="10"> </td>
                    <td width="410">Jawa Timur</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">d.</td>
                    <td width="100">Sumber</td>
                    <td width="10">:</td>
                    <td width="410">APBD</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20"> </td>
                    <td width="100">Dana</td>
                    <td width="10"> </td>
                    <td width="410"> </td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">e.</td>
                    <td width="100">Pelaksanaan</td>
                    <td width="10">:</td>
                    <td width="410">7 ( Tujuh ) hari Kalender</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20"> </td>
                    <td width="100">Pekerjaan</td>
                    <td width="10"> </td>
                    <td width="410"> </td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">f.</td>
                    <td width="100">Kwitansi</td>
                    <td width="10">:</td>
                    <td width="410">Nomor : 020/{{$pengadaan1->nomor}}/114.6/2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20"> </td>
                    <td width="100">Kontrak</td>
                    <td width="10"> </td>
                    <td width="410">Tanggal : {{ $pengadaan1->tanggal}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">g.</td>
                    <td width="100">Nilai</td>
                    <td width="10">:</td>
                    <td width="410">Rp.5.546.670,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20"> </td>
                    <td width="100">Kontrak</td>
                    <td width="10"> </td>
                    <td width="410"> </td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="20">2.</td>
                    <td width="540">PIHAK KEDUA telah mencapai kemajuan Hasil Belanja Belanja Alat/Bahan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="540">Kapasitas Kelembagaan Statistik Sektoral Toner Printer , dengan perhitungan nilai kontrak sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">a.</td>
                    <td width="400">Nilai Kontrak Pekerjaan</td>
                    <td width="10">:</td>
                    <td width="110">Rp.5.546.670,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">b.</td>
                    <td width="400">Jumlah yang telah dibayarkan</td>
                    <td width="10">:</td>
                    <td width="100">Rp.</td>
                    <td width="10">,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">c.</td>
                    <td width="400">Nilai kontrak yang masih tersedia</td>
                    <td width="10">:</td>
                    <td width="100">Rp.</td>
                    <td width="10">,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">d.</td>
                    <td width="400">Pembayaran termin saat ini</td>
                    <td width="10">:</td>
                    <td width="110">Rp.5.546.670,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="20">e.</td>
                    <td width="400">Sisa nilai kontrak s/d saat ini</td>
                    <td width="10">:</td>
                    <td width="100">Rp.</td>
                    <td width="10">,-</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="20">3.</td>
                    <td width="540">Pada pembayaran ini PIHAK KEDUA berhak dibayarkan sebesar</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="25"> </td>
                    <td width="540">Rp. 5.546.670,- (Terbilang : Lima Juta Lima Ratus Empat Puluh Enam Ribu Enam Ratus Tujuh Puluh Rupiah)</td>
                </tr>
            </table>
            <br>
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
                    <td width="280">MANUHUTU ARMAND FX</td>
                    <td width="280">I WAYAN RUDY ARTHA, S.Kom</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">Direktur</td>
                    <td width="280">NIP. 19770517 200901 1 005</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="560">Menyetujui</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="560">KUASA PENGGUNA ANGGARAN</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="560">Drs. Ec. NIRMALA DEWI, M.M</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="560">NIP. 19650909 199403 2 006</td>
                </tr>
            </table>
            <br>
        </div>
    </div>
</div>
@endsection