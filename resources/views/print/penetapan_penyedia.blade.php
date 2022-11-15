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
            <table border="0" align="center">
                <tr>
                    <td width="560"><center><b>PENETAPAN PENYEDIA BARANG / JASA</b></td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="50"><center><font size="2">Nomor</font></td>
                    <td><center><font size="2">:</font></td>
                    <td width="150"><center><font size="2">020/654.12/114.6/2022</font></td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Berdasarkan Berita Acara Evaluasi Dokumen Prakualifikasi Tanggal 18 Agustus 2022 Nomor : 020/654.4/114.6/2022 dan Berita Acara Klarifikasi/Negosiasi Penawaran Tanggal 1 September 2022 Nomor : 020/654.9/114.6/2022, Pekerjaan Pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer , dengan ini Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur menetapkan penyedia jasa tersebut di bawah ini untuk sebagai Penyedia Barang/Jasa dengan nilai HPS sebesar Rp. 5.688.750,- (Tujuh Puluh Sembilan Juta Sembilan Ratus Tiga Puluh Tujuh Ribu Delapan Ratus Rupiah) :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Nama Perusahaan</td>
                    <td width="10">:</td>
                    <td width="360">CV. PATRIA NUGRAHA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Nama Penanggung Jawab</td>
                    <td width="10">:</td>
                    <td width="360">MANUHUTU ARMAND FX</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Alamat Perusahaan</td>
                    <td width="10">:</td>
                    <td width="360">Jalan  Kanwa No. 22-A Surabaya</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Nomor Pokok Wajib Pajak</td>
                    <td width="10">:</td>
                    <td width="360">01.510.544.8-609.000</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Harga Penawaran</td>
                    <td width="10">:</td>
                    <td width="360">Rp. 5.546.670,- (Lima Juta Lima Ratus Empat</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Setelah Negosiasi</td>
                    <td width="10"> </td>
                    <td width="360">Puluh Enam Ribu Enam Ratus Tujuh Puluh Rupiah)</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan pengadaan langsung.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>Surabaya, 7 September 2022</td>
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
        </div>
    </div>
</div>

@endsection