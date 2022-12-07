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
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>BERITA ACARA EVALUASI DOKUMEN PRAKUALIFIKASI</b>
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
                            <font size="2">020/{{$pengadaan->nomor}}/114.6/2022</font>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Pada hari ini {{$pengadaan->deskripsi_tanggal}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal {{$pengadaan->tanggal->isoFormat('D MMMM Y')}} Nomor : 188/19/114.1/2022, melaksanakan klarifikasi dan negosiasi untuk pelaksanaan {{ $pengadaan->pengadaan->jenis_pengadaan}} , dibiayai dari dana APBD Tahun Anggaran 2022 pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening {{$pengadaan->pengadaan->pelaksana->kode_rekening}} dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{$pengadaan->pengadaan->total_hps}},- ({{$pengadaan->pengadaan->deskripsi_hps}}).</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Melakukan klarifikasi dan negosiasi terhadap penawaran yang diajukan oleh : {{$pengadaan->pengadaan->pt_pelaksana}} {{$pengadaan->pengadaan->pelaksana->alamat}} dengan hasil terlampir.</td>
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
                    <td width="360">{{$pengadaan->pengadaan->pt_pelaksana}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Nama Penanggung Jawab</td>
                    <td width="10">:</td>
                    <td width="360">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Alamat Perusahaan</td>
                    <td width="10">:</td>
                    <td width="360">{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Nomor Pokok Wajib Pajak</td>
                    <td width="10">:</td>
                    <td width="360">{{$pengadaan->pengadaan->pelaksana->npwp}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Pekerjaan</td>
                    <td width="10">:</td>
                    <td width="360">{{ $pengadaan->pengadaan->jenis_pengadaan}}</td>
                </tr>
            </table>
            {{--  <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190"> </td>
                    <td width="10"> </td>
                    <td width="360">Kelembagaan Statistik Sektoral Toner Printer</td>
                </tr>
            </table>  --}}
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Dengan Harga</td>
                    <td width="10">:</td>
                    <td width="360">Rp. {{$pengadaan->pengadaan->total_hps}},-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190"> </td>
                    <td width="10"> </td>
                    <td width="360">({{$pengadaan->pengadaan->deskripsi_hps}})</td>
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
                        <td width="258px" scope="col">PEKERJAAN : {{ $pengadaan->pengadaan->jenis_pengadaan}}</td>
                        <td width="258px" scope="col">Nomor : 020/{{$pengadaan->nomor}}/114.6/2022 Tanggal : {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Pada hari ini {{$pengadaan->deskripsi_tanggal}}, dimulai pukul 10.00 WIB sampai dengan selesai, dengan mengambil tempat di Ruang Argopuro Dinas Komunikasi Dan Informatika Provinsi Jawa Timur telah disusun Berita Acara Hasil Pengadaan Langsung untuk Pekerjaan tersebut diatas.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30">I.</td>
                    <td width="530">Bahwa dalam proses Pengadaan Langsung pengadaan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">{{ $pengadaan->pengadaan->jenis_pengadaan}}</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">telah diundang calon penyedia yaitu :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="65"> </td>
                    <td width="200">Nama Perusahaan</td>
                    <td>:</td>
                    <td width="300">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="65"> </td>
                    <td width="200">Alamat</td>
                    <td>:</td>
                    <td width="300">{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
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
                    <td width="300">Rp. {{$pengadaan->pengadaan->harga_penawaran}},-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="300">{{$pengadaan->pengadaan->deskripsi_penawaran}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200">Harga Penawaran setelah Koreksi Aritmatik</td>
                    <td>:</td>
                    <td width="300">Rp. {{$pengadaan->pengadaan->harga_penawaran}},-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="300">{{$pengadaan->pengadaan->deskripsi_penawaran}}</td>
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
                    <td width="300">Rp. {{$pengadaan->pengadaan->harga_penawaran}},-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="300">({{$pengadaan->pengadaan->deskripsi_penawaran}})</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">-</td>
                    <td width="200">Harga Penawaran setelah Negosiasi</td>
                    <td>:</td>
                    <td width="300">Rp. {{$pengadaan->pengadaan->nilai_negosiasi}},-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200"> </td>
                    <td> </td>
                    <td width="300">({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
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

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas4')  }}">Cetak PDF <i class="fa fa-save"></i></a>
    </div>
</div>
@endsection