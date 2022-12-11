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
@php
    use App\Models\Jadwal;
    use App\Models\pejabat;
    $png = $pengadaan->pengadaan_id;
    $png = $pengadaan->pengadaan_id;

    $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
    ->get();
    $BeritaAcaraSerahTerimaHasilPekerjaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'BA Serah Terima Hasil Pekerjaan')
    ->get();

    $pejabat = Pejabat::all();
@endphp
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;">
                        <img src="{{asset('img/logo_jatim.png')}}" width="70" height="70">
                    </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;">
                        <center><font size="3"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                                <font size="3">DINAS KOMUNIKASI DAN INFORMATIKA</font><br>
                                <font size="3">Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517</font><br>
                                <font size="3">Website : http://www.jatimprov.go.id </font><br>
                                <font size="2">Email:kominfo@jatimprov.go.id</font><br>
                                <font size="3">S U R A B A Y A-60235</font><br>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" colspan="2"><hr></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="560"><center><b>SURAT PERINTAH MULAI KERJA (SPMK)</b></td>
                <tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="560"><center>Nomor : 020/{{$pengadaan->nomor}}/114.6/2022</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify; text-indent: 45px;" width="560">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, {{$pengadaan->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
                <tr>
            </table>
            <br>
            @foreach ($pejabat as $pjb)
                <table border="0" align="center" width="565">
                    <tr>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="100">Nama</td>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="5">:</td>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="360">{{$pjb->pejabat_pembuatan_komitmen}}</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="100">NIP</td>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="5">:</td>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="360">{{$pjb->nip_pejabat_komitmen}}</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="100">Jabatan</td>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="5">:</td>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="360">Pejabat Pembuat Komitmen Dinas Komunikasi Dan Informatika Provinsi Jawa Timur</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="100">Alamat Kantor</td>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="5">:</td>
                        <td style="vertical-align:top; text-align: left ;text-align: justify;" width="360">Jl. A. Yani No. 242-244 Surabaya</td>
                    </tr>
                </table>
            @endforeach

            
            <br>
            <table border="0" align="center" width="565">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" style="text-align: left ;text-align: justify; text-indent: 45px;">Yang Bertindak untuk dan atas nama Dinas Komunikasi dan Infromatika Provinsi Jawa Timur, yang selanjutnya disebut <b> PIHAK KESATU</b>, memberikan perintah kerja kepada :
                    </td>
                <tr>
            </table>
            <table border="0" align="center" width="565">
                @foreach ($KuitansiKontrak as $kk)
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="8"></td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" style="text-align: left ;text-align: justify;">Berdasarkan Kwitansi Kontrak Nomor : 020/020/{{$kk->nomor}}/114.6/{{$kk->tanggal->format('Y')}} tanggal {{$kk->deskripsi_tgl}} Tahun {{$kk->tanggal->format('Y')}} dengan ini:
                    </td>
                </tr>
                @endforeach
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="565"><center><b>MEMERINTAHKAN :</b></td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="120">Nama</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="10">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="430">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                <tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="120">Jabatan</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="10">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="430">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                <tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="120">Nama Perusahaan</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="10">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="430">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                <tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="120">Alamat Kantor</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="10">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="430">{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" width="565">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" style="text-align: left ;text-align: justify; text-indent: 45px;">Yang bertindak untuk dan atas nama Perusahaan {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}, yang selanjutnya disebut <b>PIHAK KEDUA</b> Untuk segera memulai pelaksanaan pekerjaan dengan memperhatikan ketentuan-ketentuan sebagaI berikut:</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" width="565">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="8"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="15">1.</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="130">Pekerjaan</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="370">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="8"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="15">2.</td>
                    <td style="vertical-align:top; text-align: left ;" width="130">Tanggal Mulai Kerja </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="370">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="8"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="15">3.</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="130">Syarat-syarat pekerjaan </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="370">Sesuai dengan persyaratan dan ketentuan kontrak</td>
                </tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="8"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="15">4.</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="130">Waktu penyelesaian </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="370">Selama {{$pengadaan->alokasi}} hari kalender dan pekerjaan harus sudah selesai pada tanggal @foreach ($BeritaAcaraSerahTerimaHasilPekerjaan as $basrhp) {{$pengadaan->tanggal->format('Y')}} @endforeach</td>
                </tr>
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="8"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="15">5.</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="130">Sanksi </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;">:</td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="370">Terhadap keterlambatan penyerahan hasil kerja dikenakan sanksi dan denda sesuai dengan ketentuan kontrak</td>
                </tr>
            </table>

            
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="30"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="150"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="5"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="375">dikenakan sanksi dan denda sesuai dengan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="30"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="150"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="5"> </td>
                    <td style="vertical-align:top; text-align: left ;text-align: justify;" width="375">ketentuan kontrak</td>
                <tr>
            </table>
            <br>
            <div>
                <table align="center" border="0" font-size="0" width="565">
                    <tr>
                        <td ></td>
                        <td align="center" style="vertical-align:top; ">Ditetapkan di : Surabaya </td>
                    </tr>
                    <tr>
                        <td ></td>
                        <td align="center">Pada tanggal : {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
                    </tr>
                    <tr>
                        
                        <td style="vertical-align:top; " align="center">MENERIMA DAN MENYETUJUI <br> PIHAK KEDUA</td>
                    
                        
                        <td style="vertical-align:top;" width="225" align="center">PIHAK KESATU <br> PEJABAT PEMBUAT KOMITMEN</td
                        <td style="vertical-align:top; text-align: justify;" width="20"> </td>
                    </tr>
                    <tr>
                        
                        <td style="vertical-align:top; " width="225" align="center">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                        <td style="vertical-align:top; " width="225" align="center">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
                    </tr>
                </table>
            </div>
            @foreach ($pejabat as $pjb)
            <br><br><br>
            <div style="text-align:center ;">
                <table align="center" border="0" font-size="0" width="565">
                    <tr>
                        <td style="vertical-align:top; " width="225" align="center"><u>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                        <td style="vertical-align:top; " width="225" align="center"><u>{{$pjb->pejabat_pengadaan}}</u></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top;" width="225" align="center">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}} </td>
                        <td style="vertical-align:top;" width="225" align="center">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
</div>
@endsection