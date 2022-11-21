{{-- @extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
@section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection --> --}}

@extends('layouts.index')
@section('content')
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
<<<<<<< HEAD
                        <center>
                            <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                            <font size="3"><b>PROVINSI JAWA TIMUR<b /></font><br>
                            <font size="3"><u>NOTA DINAS<u /></font><br>
=======
                        {{-- <center><font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                                <font size="3"><b>PROVINSI JAWA TIMUR<b/></font><br>
                                <font size="3"><u>NOTA DINAS<u/></font><br> --}}
                        <center>
                            <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                            <font size="3"><b>PROVINSI JAWA TIMUR</b></font><br>
                            <font size="3"><b><b><u>NOTA DINAS</u></b></b></font><br>
                        </center>
>>>>>>> 8d92791253f559d59d569976e89755838d055564
                    </td>
                </tr>
                <tr>
                    <td width="555" colspan="2">
                        <hr>
                    </td>
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
                    <td width="475">Pejabat Pembuat Komitmen</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Tanggal</td>
                    <td>:</td>
                    {{-- <td width="475">{{ $jadwal->tanggal }}</td> --}}
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Nomor</td>
                    <td>:</td>
                    <td width="475">020/654.2/114.6/2022</td>
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
                    <td width="475">Pemrosesan Administrasi Pengadaan {{ $pengadaan->jenis_pengadaan }}</td>
                    {{-- <td width="475">Pemrosesan Administrasi Pengadaan {{ $jadwal->jenis_pengadaan }}</td> --}}
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80"> </td>
                    <td width="5"> </td>
                    {{-- <td width="475">Kapasitas Kelembagaan Statistik Sektoral Toner Printer</td> --}}
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022, kode rekening 2.20.02.1.01.5.1.02.01.01.0029 pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="50px" scope="col">No</th>
                        <th width="265px" scope="col">Belanja Alat/Bahan Untuk Kegiatan Kantor </th>
                        <th width="100px" scope="col">Jumlah Barang</th>
                        <th width="100px" scope="col">Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Toner Printer Tinta Printer Epson L-1300</td>
                        <td align="center">2</td>
                        <td align="center">Buah</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Toner Printer Tinta Printer Epson L-1800</td>
                        <td align="center">1</td>
                        <td align="center">Buah</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Toner Printer Tinta Printer Epson L-6160</td>
                        <td align="center">1</td>
                        <td align="center">Buah</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Sehubungan dengan hal tersebut diatas, untuk penyedia Barang/Jasa ditunjuk CV. PATRIA NUGRAHA, JL. Kanwa No. 22-A Kota Surabaya. Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Demikian untuk pelaksanaannya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PEMBUAT KOMITMEN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>I WAYAN RUDY ARTHA, S.Kom</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>NIP. 19770517 200901 1 005</td>
                    <td width="50"> </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas2')  }}">Cetak PDF <i class="fa fa-save"></i></a>
    </div>
</div>

@endsection