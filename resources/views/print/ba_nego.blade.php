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
                    <td width="560"><center><b>BERITA ACARA EVALUASI DOKUMEN PRAKUALIFIKASI</b></td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="50"><center><font size="2">Nomor</font></td>
                    <td><center><font size="2">:</font></td>
                    <td width="150"><center><font size="2">020/654.6 /114.6/2022</font></td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Pada hari ini Kamis, Tanggal Satu, Bulan September Tahun Dua Ribu Dua Puluh Dua kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal 3 Januari 2022 Nomor : 188/19/114.1/2022, melaksanakan klarifikasi dan negosiasi untuk pelaksanaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer , dibiayai dari dana APBD Tahun Anggaran 2022 pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening 2.20.02.1.01.5.1.02.01.01.0029 dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. 5.688.750,- (Lima Juta Enam Ratus Delapan Puluh Delapan Ribu Tujuh Ratus Lima Puluh Rupiah).</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Melakukan klarifikasi dan negosiasi terhadap penawaran yang diajukan oleh : CV. PATRIA NUGRAHA Jalan  Kanwa No. 22-A, S U R A B A Y A  dengan hasil terlampir.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Dari hasil klarifikasi dan negosiasi harga, ditetapkan sebagai penyedia yaitu :</td>
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
                    <td width="190">Pekerjaan</td>
                    <td width="10">:</td>
                    <td width="360">Belanja Belanja Alat/Bahan Kapasitas</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190"> </td>
                    <td width="10"> </td>
                    <td width="360">Kelembagaan Statistik Sektoral Toner Printer</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Dengan Harga</td>
                    <td width="10">:</td>
                    <td width="360">Rp. 5.546.670,- (Lima Juta Lima Ratus Empat</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190"> </td>
                    <td width="10"> </td>
                    <td width="360">Puluh Enam Ribu Enam Ratus Tujuh Puluh Rupiah)</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Dengan pertimbangan bahwa spesifikasi teknis sesuai dengan ketentuan dan harga dapat dipertanggungjawabkan dan menguntungkan Pemerintah Provinsi Jawa Timur.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan pengadaan langsung.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">Direktur,</td>
                    <td width="280">PEJABAT PENGADAAN</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">CV. PATRIA NUGRAHA</td>
                    <td width="280"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">MANUHUTU ARMAND FX</td>
                    <td width="280">ADI KURNIAWAN.S.Kom.,M.Kom</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280"> </td>
                    <td width="280">NIP. 19890618 201403 1 002</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="515px" scope="col">BERITA ACARA HASIL PENGADAAN BARANG</th>
                    </tr>
                </thead>
            </table>
            <table width="565px" border="1" align="center">
                <tbody>
                    <tr>
                        <td width="258px" scope="col">PEKERJAAN : Belanja Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer</td>
                        <td width="258px" scope="col">Nomor 	: 	020/654.10/114.6/2022 Tanggal	:	5 September 2022</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Pada hari ini Senin, Tanggal Lima, Bulan September, Tahun Dua Ribu Dua Puluh Dua, dimulai pukul                     10.00 WIB sampai dengan selesai, dengan mengambil tempat di Ruang Argopuro Dinas Komunikasi Dan Informatika Provinsi Jawa Timur telah disusun Berita Acara Hasil Pengadaan Langsung untuk Pekerjaan tersebut diatas.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30">I.</td>
                    <td width="530">Bahwa dalam proses Pengadaan Langsung pengadaan Belanja Belanja</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">Printer telah diundang calon penyedia yaitu :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="65"> </td>
                    <td width="200">Nama Perusahaan</td>
                    <td>:</td>
                    <td width="300">CV. PATRIA NUGRAHA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="65"> </td>
                    <td width="200">Alamat</td>
                    <td>:</td>
                    <td width="300">Jalan  Kanwa No. 22-A Surabaya</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">Setelah dilakukan penilaian kualifikasi/kompetensi badan usaha maka penyedia tersebut dianggap mampu untuk melaksanakan pekerjaan pengadaan langsung tersebut.</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30">II.</td>
                    <td width="530">Setelah Penyedia menyampaikan penawaran (administrasi, teknis dan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">harga) maka dilakukan pembukaan penawaran. Dalam pembukaan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">penawaran diperoleh hasil sebagai berikut :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="530">1.</td>
                </tr>
            </table>
            
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">2.</td>
                    <td width="200">Harga Penawaran</td>
                    <td>:</td>
                    <td width="300">Rp. 5.611.050,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="300">(Lima Juta Enam Ratus Sebelas Ribu Lima Puluh Rupiah)</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200">Harga Penawaran setelah Koreksi Aritmatik</td>
                    <td>:</td>
                    <td width="300">Rp. 5.611.050,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="300">(Lima Juta Enam Ratus Sebelas Ribu Lima Puluh Rupiah)</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Selanjutnya dilakukan evaluasi dengan unsur-unsur evaluasi sebagai berikut :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30">1.</td>
                    <td width="480">Evaluasi Administrasi</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30">2.</td>
                    <td width="480">Evaluasi Teknis</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30">3.</td>
                    <td width="480">Evaluasi Kewajaran Harga</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="530">Unsur – unsur selengkapnya sebagai berikut :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30">1.</td>
                    <td width="480">Evaluasi Administrasi</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30"> </td>
                    <td width="480">Evaluasi Administrasi meliputi :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30"> </td>
                    <td width="30">a.</td>
                    <td width="450">Surat Penawaran</td>
                </tr>
            </table>

            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30">2.</td>
                    <td width="480">Evaluasi Teknis</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30"> </td>
                    <td width="480">Apabila penawaran memenuhi syarat administrasi tersebut diatas dilakukan evaluasi teknis, unsur evaluasi teknis meliputi :</td>
                </tr>
            </table>

            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30">3.</td>
                    <td width="480">Evaluasi Kewajaran Harga</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="50"> </td>
                    <td width="30"> </td>
                    <td width="480">Penawaran yang telah lulus evaluasi teknis dilakukan Evaluasi Kewajaran Harga, yang meliputi :</td>
                </tr>
            </table>

            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30">III.</td>
                    <td width="530">Setelah evaluasi dinyatakan memenuhi syarat maka dilakukan proses</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">Klarifikasi Teknis dan Negosiasi Harga. Dari Hasil Negosiasi harga</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">diperoleh hasil sebagai berikut :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">-</td>
                    <td width="200">Harga Penawaran</td>
                    <td>:</td>
                    <td width="300">Rp. 5.611.050,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="300">(Lima Juta Enam Ratus Sebelas Ribu Lima Puluh Rupiah)</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">-</td>
                    <td width="200">Harga Penawaran setelah Negosiasi</td>
                    <td>:</td>
                    <td width="300">Rp. 5.546.670,-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="300">(Lima Juta Lima Ratus Empat Puluh Enam Rupiah)</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Untuk selanjutnya Berita Acara Hasil Pengadaan Langsung ini akan disampaikan kepada Pejabat Pembuat Komitmen untuk proses pengadaan langsung selanjutnya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Demikian Berita Acara Hasil Pengadaan dibuat dengan sebenarnya oleh Pejabat Pengadaan untuk dipergunakan sebagaimana mestinya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td>
                        <center><b>PEJABAT PENGADAAN DI LINGKUNGAN</b><br>
                                <b>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</b><br>
                    </td>
                </tr>
            </table>
            <br>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="240" scope="col">Nama</th>
                        <th width="145px" scope="col">Jabatan</th>
                        <th width="100px" scope="col">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center" height="100">
                        <th scope="row">1</th>
                        <td>ADI KURNIAWAN.S.Kom.,M.Kom</td>
                        <td>Pejabat Pengadaan</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection