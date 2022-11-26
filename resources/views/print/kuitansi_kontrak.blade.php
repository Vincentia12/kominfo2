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
                        <hr>
                    </td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="100"> </td>
                    <td width="150">Tahun Anggaran</td>
                    <td width="10">:</td>
                    <td width="310">2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="100"> </td>
                    <td width="150">Nomor Bukti</td>
                    <td width="10">:</td>
                    <td width="310">020/{{$pengadaan1->nomor}}/114.6/2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="100"> </td>
                    <td width="150">Mata Anggaran</td>
                    <td width="10">:</td>
                    <td width="310">2.20.02.1.01.5.1.02.01.01.0029</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td>
                        <center>
                            <font size="3"><b>KUITANSI KONTRAK</b></font><br>
                    </td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Sudah Terima Dari</td>
                    <td width="10">:</td>
                    <td width="390">Pejabat Pembuat Komitmen Diskominfo Prov. Jatim</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Jumlah uang</td>
                    <td width="10">:</td>
                    <td width="390">Rp. 5.546.670,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Terbilang</td>
                    <td width="10">:</td>
                    <td width="390">(Lima Juta Lima Ratus Empat Puluh Enam Ribu Enam Ratus Tujuh Puluh Rupiah)</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Untuk Pembayaran</td>
                    <td width="10">:</td>
                    <td width="390">{{ $pengadaan1->pengadaan->jenis_pengadaan}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Lingkup Pekerjaan /Pengadaan barang / jasa :</td>
                </tr>
            </table>
            <br>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">NO</th>
                        <th width="150" scope="col">PEKERJAAN</th>
                        <th width="84" scope="col">KUANTITAS</th>
                        <th width="84" scope="col">SATUAN</th>
                        <th width="84" scope="col">HARGA SATUAN</th>
                        <th width="84" scope="col">JUMLAH HARGA</th>
                    </tr>
                    <tr align="center">
                        <th width="30px" scope="col">1</th>
                        <th width="150" scope="col">2</th>
                        <th width="84" scope="col">3</th>
                        <th width="84" scope="col">4</th>
                        <th width="84" scope="col">5</th>
                        <th width="84" scope="col">6</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> </th>
                        <td>Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Toner Printer</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <th scope="row"> </th>
                        <td>Tinta Printer Epson L-1300-(2)hitam, cyan, magenta,yellow</td>
                        <td align="center">2</td>
                        <td align="center">buah</td>
                        <td>1.245.000,-</td>
                        <td>2.490.000,-</td>
                    </tr>
                    <tr>
                        <th scope="row"> </th>
                        <td>Tinta Printer Epson L-1800-(2)hitam, cyan,magenta,yellow, lightcyan,lightmagenta</td>
                        <td align="center">1</td>
                        <td align="center">buah</td>
                        <td>1.257.000,-</td>
                        <td>1.257.000,-</td>
                    </tr>
                    <tr>
                        <th scope="row"> </th>
                        <td>Tinta Printer L-6160-(2)hitam,cyan,magenta,yellow</td>
                        <td align="center">1</td>
                        <td align="center">buah</td>
                        <td>1.250.000,-</td>
                        <td>1.250.000,-</td>
                    </tr>
                    <tr height="20">
                        <th scope="row"> </th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr height="20">
                        <th scope="row"> </th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <table width="585px" border="1" align="center">
                <thead>
                    <tr align="right">
                        <th width="500">TOTAL HARGA </th>
                        <th width="80">4.997.000,-</th>
                    </tr>
                    <tr align="right">
                        <th width="500">PPn 11 % </th>
                        <th width="80">549.670,-</th>
                    </tr>
                    <tr align="right">
                        <th width="500">TOTAL HARGA </th>
                        <th width="80">5.546.670,-</th>
                    </tr>
                </thead>
            </table>
            <br>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="40">1.</td>
                    <td width="520">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran 2022, dibebankan pada DP A - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022 Kode Rekening 2.20.02.1.01.5.1.02.01.01.0029</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="40">2.</td>
                    <td width="520">Jangka Waktu Pelaksanaan 7 (Tujuh) hari kalender, tanggal pelaksanaan yaitu Tanggal 13 September – 20 September 2022</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.</td>
                </tr>
            </table>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280"> </td>
                    <td width="280">Surabaya, {{ $pengadaan1->tanggal}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">CV. PATRIA NUGRAHA</td>
                    <td width="280">PEJABAT PEMBUAT KOMITMEN</td>
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
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas4')  }}">Cetak PDF <i class="fa fa-save"></i></a>
    </div>
</div>

@endsection