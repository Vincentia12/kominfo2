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

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <br>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">NO</th>
                        <th width="120" scope="col">JENIS BARANG / PEKERJAAN</th>
                        <th width="83" scope="col">SPESIFIKASI</th>
                        <th width="83" scope="col">KUANTITAS</th>
                        <th width="83" scope="col">SATUAN</th>
                        <th width="83" scope="col">HARGA SATUAN ( Rp.)</th>
                        <th width="83" scope="col">JUMLAH HARGA (Rp.)</th>
                    </tr>
                    <tr align="center">
                        <th width="30px" scope="col">1</th>
                        <th width="120" scope="col">2</th>
                        <th width="83" scope="col">3</th>
                        <th width="83" scope="col">4</th>
                        <th width="83" scope="col">5</th>
                        <th width="83" scope="col">6</th>
                        <th width="83" scope="col">7</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  <tr>
                        <td width="565px">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</td>
                    </tr>  --}}
                    <tr>
                        <td align="center">1.</td>
                        <td>Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer</td>
                        <td>Toner Printer</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td align="center"> </td>
                        <td> </td>
                        <td>Tinta Printer Epson L-1300-(2) hitam,cyan,magenta, yellow</td>
                        <td align="center">2</td>
                        <td align="center">buah</td>
                        <td>1.245.000</td>
                        <td>2.490.000</td>
                    </tr>
                    <tr>
                        <td align="center"> </td>
                        <td> </td>
                        <td>Tinta Printer Epson L-1800-(2)hitam, cyan,magenta, yellow,lighcyan,lightmagenta</td>
                        <td align="center">1</td>
                        <td align="center">buah</td>
                        <td>1.257.000</td>
                        <td>1.257.000</td>
                    </tr>
                    <tr>
                        <td align="center"> </td>
                        <td> </td>
                        <td>Tinta Printer Epson L-6160-(2)hitam,cyan,magenta, yellow</td>
                        <td align="center">1</td>
                        <td align="center">buah</td>
                        <td>1.250.000</td>
                        <td>1.250.000</td>
                    </tr>
                    <tr height="20">
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <table width="600px" border="1" align="center">
                <thead>
                    <tr align="right">
                        <th width="517">Total</th>
                        <th width="83">4.997.000,-</th>
                    </tr>
                    <tr align="right">
                        <th width="517">PPn 11 %  </th>
                        <th width="83">549.670,-</th>
                    </tr>
                    <tr align="right">
                        <th width="517">Jumlah Total</th>
                        <th width="83">5.546.670,-</th>
                    </tr>
                </thead>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">6.</td>
                    <td width="530">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran 2022, dibebankan pada DPA - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022, Kode Rekening 2.20.02.1.01.5.1.02.01.01.0029</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">7.</td>
                    <td width="530">Jangka Waktu Pelaksanaan 7 (Tujuh) hari kalender, tanggal pelaksanaan yaitu Tanggal 13 September – 20 September 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">8.</td>
                    <td width="530">Instruksi kepada PIHAK KEDUA :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">a.</td>
                    <td width="500">Penagihan hanya dapat dilakukan setelah penyelesaian pekerjaan yang diperintahkan dalam SPK ini dan dibuktikan dengan Berita Acara Serah Terima.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">b.</td>
                    <td width="500">Jika pekerjaan tidak dapat diselesaikan dalam jangka waktu pelaksanaan pekerjaan karena kesalahan atau kelalaian penyedia maka penyedia berkewajiban untuk membayar denda kepada PPK sebesar 1/1000 (satu per seribu) dari nilai SPK sebelum PPn setiap hari kalender keterlambatan.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">c.</td>
                    <td width="500">Selain tunduk kepada ketentuan dalam SPK ini, penyedia berkewajiban untuk mematuhi Standar Ketentuan dan Syarat Umum SPK terlampir.</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">PIHAK KEDUA</td>
                    <td width="280">Menyetujui :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">Penyedia Barang/Jasa</td>
                    <td width="280">PIHAK KESATU</td>
                </tr>
            </table>
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
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="560">Mengetahui :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="560">KUASA PENGGUNA ANGGARAN</td>
                <tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="560">Dra. Ec. NIRMALA DEWI, MM</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="560">NIP. 19650909 199403 2 006</td>
                <tr>
            </table>
            <br>
        </div>
    </div>
</div>
@endsection