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
                        <center><b>BERITA ACARA KLARIFIKASI / NEGOSIASI</b>
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
            @php
            use App\Models\pejabat;
            $pejabat = Pejabat::all();
            @endphp
            <table border="0" align="center" font-size="2">
                
                <tr>
                    <td width="560" style="text-indent: 45px; text-align:justify;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tanggal}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal @foreach ($pejabat as $pjb){{date('d F Y', strtotime($pjb->tanggal))}} Nomor : {{$pjb->nomor_sk}}, melaksanakan klarifikasi dan negosiasi untuk pelaksanaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer , dibiayai dari dana APBD Tahun Anggaran {{date('y', strtotime($pjb->tanggal))}}@endforeach pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening {{$pengadaan->pengadaan->kode_rekening}} dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{number_format($pengadaan->pengadaan->total_hps)}},- ({{$pengadaan->pengadaan->deskripsi_hps}}).
                    </td>
                </tr>
                
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Melakukan klarifikasi dan negosiasi terhadap penawaran yang diajukan oleh : {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}} {{$pengadaan->pengadaan->pelaksana->alamat}} dengan hasil terlampir.</td>
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
                    <td width="360">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
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
                    <td width="360">Rp. {{number_format($pengadaan->pengadaan->total_hps)}},-</td>
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
                    <td width="560" style="text-align:justify;">Dengan pertimbangan bahwa spesifikasi teknis sesuai dengan ketentuan dan harga dapat dipertanggung jawabkan dan menguntungkan Pemerintah Provinsi Jawa Timur.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560" style="text-indent: 45px; text-align:justify;">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan pengadaan langsung.</td>
                </tr>
            </table>
            <br>
            @foreach ($pejabat as $pjb)
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">Direktur,</td>
                    <td width="280">PEJABAT PENGADAAN</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    {{-- <td width="280">CV. PATRIA NUGRAHA</td> --}}
                    <td width="280"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280"><u>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                    <td width="280"><u>{{$pjb->pejabat_pengadaan}}</u></td>
                    {{-- <td width="280">MANUHUTU ARMAND FX</td>
                    <td width="280">ADI KURNIAWAN.S.Kom.,M.Kom</td> --}}
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280"> </td>
                    <td width="280">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th colspan="2" width="515px" scope="col">BERITA ACARA HASIL PENGADAAN BARANG</th>
                    </tr>
                </thead>
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
                    <td width="565" style="text-align:justify;">Pada hari ini {{$pengadaan->deskripsi_tanggal}}, dimulai pukul 10.00 WIB sampai dengan selesai, dengan mengambil tempat di Ruang Argopuro Dinas Komunikasi Dan Informatika Provinsi Jawa Timur telah disusun Berita Acara Hasil Pengadaan Langsung untuk Pekerjaan tersebut diatas.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" >
                <tr>
                    <td width="30" style="vertical-align:top">I.</td>
                    <td width="530" style="vertical-align:top; text-align:justify;">Bahwa dalam proses Pengadaan Langsung pengadaan {{ $pengadaan->pengadaan->jenis_pengadaan}} telah diundang calon penyedia yaitu :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="65"> </td>
                    <td width="200" style="vertical-align:top; text-align:justify;">Nama Perusahaan</td>
                    <td>:</td>
                    <td width="300" style="vertical-align:top; text-align:justify;">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
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
                    <td width="530" style="vertical-align:top; text-align:justify;">Setelah dilakukan penilaian kualifikasi/kompetensi badan usaha maka penyedia tersebut dianggap mampu untuk melaksanakan pekerjaan pengadaan langsung tersebut.</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30" style="vertical-align:top; text-align:justify;">II.</td>
                    <td width="530" style="vertical-align:top; text-align:justify;">Setelah Penyedia menyampaikan penawaran (administrasi, teknis dan harga) maka dilakukan pembukaan penawaran. Dalam pembukaan penawaran diperoleh hasil sebagai berikut :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="530">1.</td>
                </tr>
            </table>
            <table width="500" border="1" align="center" font-size="2">
                <thead style="width:100%; text-align: center; background-color: lightgrey;">
                    <tr>
                        <th colspan="3">PENAWARAN</th>
                        <th rowspan="3">KETERANGAN</th>
                    </tr>
                    <tr>
                        <th>Administrasi</th>
                        <th>Teknis</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Lengkap</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30" style="vertical-align:top; text-align:justify;">2.</td>
                    <td width="200" style="vertical-align:top; text-align:justify;">Harga Penawaran</td>
                    <td style="vertical-align:top; text-align:justify;">:</td>
                    <td width="300" style="vertical-align:top; text-align:justify;">Rp. {{number_format($pengadaan->pengadaan->harga_penawaran)}},- <br>{{$pengadaan->pengadaan->deskripsi_penawaran}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30"> </td>
                    <td width="200" style="vertical-align:top; text-align:justify;">Harga Penawaran setelah Koreksi Aritmatik</td>
                    <td style="vertical-align:top; text-align:justify;">:</td>
                    <td width="300" style="vertical-align:top; text-align:justify;">Rp. {{number_format($pengadaan->pengadaan->harga_penawaran)}},- <br>{{$pengadaan->pengadaan->deskripsi_penawaran}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    {{-- <td width="50"></td> --}}
                    <td width="560">Selanjutnya dilakukan evaluasi dengan unsur-unsur evaluasi sebagai berikut :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    {{-- <td width="50"> </td> --}}
                    <td width="30" style="vertical-align:top; ">1.</td>
                    <td width="480" style="vertical-align:top; ">Evaluasi Administrasi</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    {{-- <td width="50"> </td> --}}
                    <td width="30" style="vertical-align:top; text-align:justify;">2.</td>
                    <td width="480" style="vertical-align:top; text-align:justify;">Evaluasi Teknis</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    {{-- <td width="50"> </td> --}}
                    <td width="30">3.</td>
                    <td width="480">Evaluasi Kewajaran Harga</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td></td>
                </tr>
                <tr>
                    {{-- <td width="50"> </td> --}}
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
                    <td width="450"><b>Surat Penawaran</b></td>
                </tr>
            </table>
            <table width="500" border="1" align="center" font-size="2" style="vertical-align:top; text-align:justify;">
                <thead style="text-align: center; background-color: lightgrey;">
                    <tr>
                        <th width="5">NO</th>
                        <th width="230">UNSUR YANG DIEVALUASI</th>
                        <th width="125">KETERANGAN</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <td>1</td>
                        <td>Syarat-syarat substansial yang diminta berdasarkan Dokumen Pemilihan dipenuhi/dilengkapi</td>
                        <td style="text-align: center;" style="text-align: center;">Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Surat Penawaran</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <ul>
                                <li>
                                    Ditandatangani oleh yang berhak
                                </li>
                            </ul>
                        </td>
                        <td style="text-align: center;">Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <ul>
                                <li>
                                    Jangka waktu berlakunya surat penawaran
                                </li>
                            </ul>
                        </td>
                        <td style="text-align: center;">Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <ul>
                                <li>
                                    Jangka Waktu Pelaksanaan
                                </li>
                            </ul>
                        </td>
                        <td style="text-align: center;">Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <ul>
                                <li>
                                    Bertanggal
                                </li>
                            </ul>
                        </td>
                        <td style="text-align: center;">Memenuhi Syarat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
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
            <table width="500" border="1" align="center" font-size="2">
                <thead style="text-align: center; background-color: lightgrey;">
                    <tr>
                        <th width="5">NO</th>
                        <th width="230">UNSUR YANG DIEVALUASI</th>
                        <th width="125">KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Metode pelaksanaan pekerjaan</td>
                        <td>Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jadwal waktu pelaksanaan pekerjaan</td>
                        <td>Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Jenis, kapasitas, komposisi dan jumlah peralatan</td>
                        <td>Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Spesifikasi teknis</td>
                        <td>Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Personil Inti</td>
                        <td>Memenuhi Syarat</td>
                    </tr>
                </tbody>
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
            <table width="500" border="1" align="center" font-size="2">
                <thead style="text-align: center; background-color: lightgrey;">
                    <tr>
                        <th width="5">NO</th>
                        <th width="230">UNSUR YANG DIEVALUASI</th>
                        <th width="125">KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Total harga penawaran tidak melebihi HPS</td>
                        <td>Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Harga satuan timpang</td>
                        <td>Memenuhi Syarat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kewajaran harga</td>
                        <td>Memenuhi Syarat</td>
                    </tr>
                </tbody>
            </table>

            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30" style="vertical-align:top;">III.</td>
                    <td width="530" style="vertical-align:top;"">Setelah evaluasi dinyatakan memenuhi syarat maka dilakukan proses Klarifikasi Teknis dan Negosiasi Harga. Dari Hasil Negosiasi harga diperoleh hasil sebagai berikut :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30" style="vertical-align:top;">-</td>
                    <td width="200" style="vertical-align:top;">Harga Penawaran</td>
                    <td style="vertical-align:top;">:</td>
                    <td width="300" style="vertical-align:top;">Rp. Rp. {{number_format($pengadaan->pengadaan->harga_penawaran)}},-({{$pengadaan->pengadaan->deskripsi_penawaran}})</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="35"> </td>
                    <td width="30">-</td>
                    <td width="200" style="vertical-align:top;">Harga Penawaran setelah Negosiasi</td>
                    <td style="vertical-align:top;">:</td>
                    <td width="300" style="vertical-align:top;">Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
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
                <thead style="text-align: center; background-color: lightgrey;">
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
                        @foreach ($pejabat as $pjb)  
                        <td>{{$pjb->pejabat_pengadaan}}</td>
                        @endforeach
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
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
</div>
@endsection