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
                        <hr width="630" colspan="2">
                    </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b><u>BERITA ACARA EVALUASI DOKUMEN PRAKUALIFIKASI</u></b>
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
                            <font size="2">020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}} Tanggal {{$pengadaan->deskripsi_tgl}}, dimulai pukul 10.00 WIB sampai dengan selesai, Pejabat Pengadaan di Lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur tanggal {{$pengadaan->tanggal->isoFormat('D MMMM Y')}} Nomor : 188/19/114.1/2022, telah mengadakan rapat penjelasan untuk pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="250">NAMA PERUSAHAAN</td>
                    <td width="10">:</td>
                    <td width="410" style="text-align: justify;">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="250">ALAMAT</td>
                    <td width="10">:</td>
                    <td width="410" style="text-align: justify;">{{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="250">NOMOR POKOK WAJIB PAJAK</td>
                    <td width="10">:</td>
                    <td width="410" style="text-align: justify;">{{$pengadaan->pengadaan->pelaksana->npwp}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670">Dengan hasil sebagai berikut :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-align: justify;">Setelah mengadakan penelitian dan penilaian secara seksama terhadap dokumen prakualifikasi yang diserahkan penyedia barang/jasa, maka Pejabat Pengadaan Barang/Jasa di Lingkungan Dinas Komunikasi dan Informatika provinsi Jawa Timur memutuskan bahwa calon penyedia barang/jasa tersebut memenuhi syarat untuk melanjutkan kegiatan penunjukan langsung selanjutnya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-align: justify;">Demikian Berita Acara evaluasi dokumen prakualifikasi ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan selanjutnya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="480"> </td>
                    <td>PEJABAT PENGADAAN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="480"> </td>
                    <td><u>ADI KURNIAWAN.S.Kom.,M.Kom</u></td>
                    <td width="50"> </td>
                </tr>
                <tr>
                    <td width="480"> </td>
                    <td>NIP. 19890618 201403 1 002</td>
                    <td width="50"> </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        {{-- <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button> --}}
        {{-- <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas4')  }}">Cetak PDF <i class="fa fa-save"></i></a> --}}
    </div>
</div>

@endsection