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
                    <td width="560"><center><b>SURAT PERINTAH MULAI KERJA (SPMK)</b></td>
                <tr>
                <tr>
                    <td width="560"><center>Nomor : 020/654.16/114.6/2022</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Pada hari ini Selasa, Tanggal Tiga Belas, Bulan September Tahun Dua Ribu Dua Puluh Dua. Kami yang bertanda tangan dibawah ini :</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="120">Nama</td>
                    <td width="10">:</td>
                    <td width="430">I WAYAN RUDY ARTHA, S.Kom</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="120">NIP</td>
                    <td width="10">:</td>
                    <td width="430">19770517 200901 1 005</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="120">Jabatan</td>
                    <td width="10">:</td>
                    <td width="430">Pejabat Pembuat Komitmen Dinas Komunikasi Dan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="120"> </td>
                    <td width="10"> </td>
                    <td width="430">Informatika Provinsi Jawa Timur</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="120">Alamat Kantor</td>
                    <td width="10">:</td>
                    <td width="430">Jl. A. Yani No. 242-244 Surabaya</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Yang Bertindak untuk dan atas nama Dinas Komunikasi dan Infromatika Provinsi Jawa Timur, yang selanjutnya disebut <b>PIHAK KESATU</b>, memberikan perintah kerja kepada :</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">Berdasarkan Kwitansi Kontrak Nomor : 020/654.14/114.6/2022 tanggal Dua Puluh Enam Bulan Jui Tahun 2022 dengan ini: </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560"><center><b>MEMERINTAHKAN :</b></td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="120">Nama</td>
                    <td width="10">:</td>
                    <td width="430">MANUHUTU ARMAND FX</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="120">Jabatan</td>
                    <td width="10">:</td>
                    <td width="430">Direktur</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="120">Nama Perusahaan</td>
                    <td width="10">:</td>
                    <td width="430">CV. PATRIA NUGRAHA</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="120">Alamat Kantor</td>
                    <td width="10">:</td>
                    <td width="430">Jalan Kanwa No. 22-A , S U R A B A Y A </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Yang bertindak untuk dan atas nama Perusahaan CV. PATRIA NUGRAHA, yang selanjutnya disebut PIHAK KEDUA Untuk segera memulai pelaksanaan pekerjaan dengan memperhatikan ketentuan-ketentuan sebagaI berikut :</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30">1.</td>
                    <td width="150">Pekerjaan</td>
                    <td width="5">:</td>
                    <td width="375">Belanja Belanja Alat/Bahan Kapasitas</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="150"> </td>
                    <td width="5"> </td>
                    <td width="375">Kelembagaan Statistik Sektoral Toner Printer</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30">2.</td>
                    <td width="150">Tanggal Mulai Kerja</td>
                    <td width="5">:</td>
                    <td width="375">13 September 2022</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30">3.</td>
                    <td width="150">Syarat-syarat</td>
                    <td width="5">:</td>
                    <td width="375">Sesuai dengan persyaratan dan ketentuan kontrak</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="150">pekerjaan</td>
                    <td width="5"> </td>
                    <td width="375"> </td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30">4.</td>
                    <td width="150">Waktu penyelesaian</td>
                    <td width="5">:</td>
                    <td width="375">Selama 7 ( Tujuh ) hari kalender dan pekerjaan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="150"> </td>
                    <td width="5"> </td>
                    <td width="375">harus sudah selesai pada tanggal</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="150"> </td>
                    <td width="5"> </td>
                    <td width="375">20 September 2022</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30">5.</td>
                    <td width="150">Sanksi</td>
                    <td width="5">:</td>
                    <td width="375">Terhadap keterlambatan penyerahan hasil kerja</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="150"> </td>
                    <td width="5"> </td>
                    <td width="375">dikenakan sanksi dan denda sesuai dengan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="150"> </td>
                    <td width="5"> </td>
                    <td width="375">ketentuan kontrak</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td width="100">Ditetapkan di</td>
                    <td width="10">:</td>
                    <td width="200">Surabaya</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td width="100">Pada tanggal</td>
                    <td width="10">:</td>
                    <td width="200">13 September 2022</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">MENERIMA DAN MENYETUJU</td>
                    <td width="280">PIHAK KESATU</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">PIHAK KESATU</td>
                    <td width="280">PEJABAT PEMBUAT KOMITMEN</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">CV. PATRIA NUGRAHA</td>
                    <td width="280">Dinas Komunikasi dan Informatika Provinsi</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280"> </td>
                    <td width="280">Jawa Timur</td>
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
@endsection